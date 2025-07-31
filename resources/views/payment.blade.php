<!-- resources/views/payment.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Payment Page - Khalti Integration</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
        <h1 class="text-2xl font-bold mb-6 text-center">Room Booking Payment</h1>

        <!-- Khalti payment button -->
        <script src="https://khalti.com/static/khalti-checkout.js"></script>

        <button id="khalti-payment-button" class="w-full bg-blue-600 text-white py-3 rounded hover:bg-blue-700 transition">
            Pay with Khalti
        </button>

        <script>
            var khaltiConfig = {
                publicKey: "{{ env('KHALTI_PUBLIC_KEY') }}",
                productIdentity: "room_123",  // unique id
                productName: "Room Booking",
                productUrl: window.location.href,
                eventHandler: {
                    onSuccess(payload) {
                        fetch('/khalti/verify', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify({
                                token: payload.token,
                                amount: payload.amount
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if(data.success){
                                alert('Payment सफल भयो!');
                                // success पछि redirect गर्न सकिन्छ, जस्तै:
                                // window.location.href = '/thank-you';
                            } else {
                                alert('Payment verify गर्न असफल भयो।');
                            }
                        })
                        .catch(() => alert('Server error भयो।'));
                    },
                    onError(error) {
                        console.log(error);
                        alert('Payment प्रक्रिया असफल भयो।');
                    },
                    onClose() {
                        console.log('Payment widget बन्द भयो।');
                    }
                }
            };

            var checkout = new KhaltiCheckout(khaltiConfig);
            document.getElementById("khalti-payment-button").onclick = function () {
                checkout.show({amount: 1000});  // amount in paisa (Rs 10)
            };
        </script>
    </div>

</body>
</html>

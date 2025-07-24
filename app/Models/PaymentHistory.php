<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class PaymentHistory extends Model {
    protected $fillable = ['user_id', 'listing_id', 'amount', 'payment_method', 'status'];
    public function user() { return $this->belongsTo(User::class); }
    public function listing() { return $this->belongsTo(Listing::class);}
}
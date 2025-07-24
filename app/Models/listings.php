<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Listings extends Model {
    protected $fillable = [ 'title', 'price', 'currency', 'location_city', 'location_area', 'room_type', 'image_url', 'description'];
}
?>
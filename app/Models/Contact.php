<?php

namespace App\Models;
use App\Models\Contact;


use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    // Make sure the table name is correct or omit if default plural 'contacts'
    protected $table = 'contacts';

    // Allow mass assignment for these fields
    protected $fillable = ['name', 'email', 'message'];

    // If you use timestamps, this is default true, otherwise set false
    public $timestamps = true;
}

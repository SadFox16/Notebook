<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notebook extends Model
{
    protected $fillable = ['title', 'phone_number', 'email'];
    //protected $fillable = ['phone_number'];
    //protected $fillable = ['email'];

    use HasFactory;
}

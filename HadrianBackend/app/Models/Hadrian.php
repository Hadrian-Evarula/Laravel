<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hadrian extends Model
{
    protected $fillable = [
        'name',
        'email',
        'password'
    ];

    use HasFactory;
}

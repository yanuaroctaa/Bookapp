<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends model
{
    protected $fillable = ['title', 'description', 'author'];
}

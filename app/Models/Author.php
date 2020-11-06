<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends model
{
    protected $fillable = ['name', 'gender', 'biography'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $fillable = [
        'image',
        'title',
        'penulis',
        'description',
    ];
}

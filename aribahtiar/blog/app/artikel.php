<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
    protected $fillable = [
        'slug', 'judul', 'content',
        'img', 'kategori_id', 'user_id','status',
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table="categories";
    protected $primaryKey="id";
    protected $fillable=[
        'name',
        'image_url',
    ];
}

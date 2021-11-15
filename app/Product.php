<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    protected $primartKey ='id_products';
    protected $fillable = ['name',
    'price',
    'image',
    'id_admin',
];
}

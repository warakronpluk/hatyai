<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class homepage extends Model
{
    protected $table = 'homepages';
    protected $primartKey ='id_homepages';
    protected $fillable = ['id_product',
    'id_bg',
    'price',
     'id_admin',
    ];
}

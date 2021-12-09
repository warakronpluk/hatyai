<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class homepage extends Model
{
    protected $primartKey ='id_homepages';
    protected $fillable = ['header',
    'image',
    ];
}

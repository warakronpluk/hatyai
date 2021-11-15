<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    protected $table = 'images';
    protected $primartKey ='id_mg';
    protected $fillable = ['image',
    'level',
    'id_admin',
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class content extends Model
{
    protected $table = 'contents';
    protected $primartKey ='id_contents';
    protected $fillable = ['text',
    'image',
    'price',
     'level',
     'id_admin',
];
}

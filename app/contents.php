<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contents extends Model
{
    protected $table = 'contents';
    protected $primaryKey = 'id_contents';
    protected $fillable = [
    'head',
    'text',
    'image',
    'id_admin',

];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name', 'detail', 'price', 'bonus_point',
         'status', 'type_id', 'pic_path'
    ];
}

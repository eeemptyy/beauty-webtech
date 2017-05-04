<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name', 'detail', 'price', 'bonus_point',
<<<<<<< Updated upstream
         'status', 'type_id', 'category', 'pic_path'
=======
         'status', 'type_id','category', 'pic_path'
>>>>>>> Stashed changes
    ];
}

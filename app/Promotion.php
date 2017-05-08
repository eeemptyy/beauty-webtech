<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $fillable = ['course_id', 'discount', 'date_start', 'date_end'];
}

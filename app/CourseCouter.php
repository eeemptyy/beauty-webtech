<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseCouter extends Model
{
    protected $fillable = [
        'course_id', 'counter', 'date'
    ];
}

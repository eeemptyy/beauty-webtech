<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseType extends Model
{
    protected $fillable = ['name', 'unit'];
    protected $visible = ['id','name', 'unit'];
}

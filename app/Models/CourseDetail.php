<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseDetail extends Model
{
    use HasFactory;
    protected $table="course_detail";
    protected $fillable=['id', 'description', 'course_id', 'college_id'];
}

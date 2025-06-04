<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'code',
        'name',
        'semester_id'
    ];

    public function semester()
    {
        return $this->belongsTo(Semester::class, 'semester_id', 'id');
    }

    public function course()
    {
        return $this->hasMany(CourseDetail::class, 'course_id', 'id');
    }
}

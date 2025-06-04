<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseDetail extends Model
{
    protected $fillable = [
        'course_id',
        'acad_year_id'
    ];

    //Uses
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }
    public function academic_year()
    {
        return $this->belongsTo(AcademicYear::class, 'acad_year_id', 'id');
    }

    //Using
    public function student_course_key()
    {
        return $this->hasMany(StudentCourseKey::class, 'course_detail_id', 'id');
    }
}

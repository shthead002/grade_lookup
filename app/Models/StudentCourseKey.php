<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentCourseKey extends Model
{
    protected $fillable = [
        'course_detail_id',
        'student_id'
    ];

    //Uses
    public function course_detail()
    {
        return $this->belongsTo(CourseDetail::class, 'course_detail_id', 'id');
    }
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }

    //Used
    public function grade()
    {
        return $this->hasMany(ExaminationGrade::class, 'course_id', 'id');
    }
}

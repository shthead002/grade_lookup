<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExaminationGrade extends Model
{
    protected $fillable = [
        'examination_id',
        'course_id',
        'grade'
    ];

    //Using
    public function examination() 
    {
        return $this->belongsTo(Examination::class, 'examination_id', 'id');
    }
    public function student_course() 
    {
        return $this->belongsTo(StudentCourseKey::class, 'course_id', 'id');
    }
}

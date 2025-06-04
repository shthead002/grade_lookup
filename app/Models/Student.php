<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'student_id',
        'first_name',
        'middle_name',
        'last_name'
    ];

    //Using
    public function student_course_key()
    {
        return $this->hasMany(Student::class, 'student_id', 'id');
    }
}

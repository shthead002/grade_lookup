<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AcademicYear extends Model
{
    protected $fillable = ['name', 'active'];

    public function course()
    {
        return $this->hasMany(CourseDetail::class, 'acad_year_id', 'id');
    }
}

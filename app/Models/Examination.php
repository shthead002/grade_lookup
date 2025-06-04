<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Examination extends Model
{
    protected $fillable = ['name'];

    //Used
    public function grade()
    {
        return $this->hasMany(ExaminationGrade::class, 'examination_id', 'id');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\AcademicYear;
use App\Models\Course;
use App\Models\CourseDetail;
use App\Models\Semester;
use Illuminate\Http\Request;

class SemesterController extends Controller
{

    public function index(AcademicYear $academicYear)
    {
        $semesters = Semester::all();
        return view('layouts.pages.setup.semester.index', compact('academicYear', 'semesters'));
    }

    public function edit(AcademicYear $academicYear, Semester $semester)
    {
        $courses = Course::where('semester_id', $semester->id)->get();
        $my_courses = CourseDetail::where('acad_year_id', $academicYear->id)
            ->whereHas('course', function ($query) use ($semester) {
                $query->where('semester_id', $semester->id);
            })->get();

        return view('layouts.pages.setup.semester.edit', compact('academicYear', 'semester', 'courses', 'my_courses'));
    }

    public function update(Request $request, AcademicYear $academicYear, Semester $semester)
    {
        dd($request->all());
    }

    public function print(AcademicYear $academicYear, Semester $semester){
        $courses = Course::where('semester_id', $semester->id)->get();
        return view('layouts.pages.setup.semester.print', compact('courses'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\AcademicYear;
use Illuminate\Http\Request;

class AcademicYearController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ays = AcademicYear::all();
        return view('layouts.pages.setup.academic_year.index', compact('ays'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.pages.setup.academic_year.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->year < 2023 || $request->year > 2075) {
            return redirect()->back()->with('error', 'Invalid year. Please input not lower than 2023 and higher than 2075');
        }
        $acad_year = $request->year . " - " . $request->year + 1;
        $existing = AcademicYear::where('name', $acad_year)->first();

        if (!isset($existing)) {
            AcademicYear::create([
                'name' => $acad_year,
                'active' => false
            ]);
        }else{
            return redirect()->back()->with('error', 'Academic year already exists. Start with another year.');
        }

        return redirect()->route('academic_year.index')->with('success', 'Academic year created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(AcademicYear $academicYear)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AcademicYear $academicYear)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AcademicYear $academicYear)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AcademicYear $academicYear)
    {
        //
    }

    public function changeStatus(AcademicYear $academicYear)
    {
        $previous_active = AcademicYear::where('active', true)->first();
        $previous_active->update([
            'active' => false
        ]);
        $academicYear->update([
            'active' => true
        ]);

        return redirect()->back();
    }
}

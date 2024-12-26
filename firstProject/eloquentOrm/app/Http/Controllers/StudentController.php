<?php

namespace App\Http\Controllers;

// use App\Models\Contact;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = Student::with('contact')->get();
        //to get data from of contact --------------------------------------------------
        // $student = Student::where('gender','Male')->withWhereHas('contact',function ($query){   
        //     $query->where('city','Surat');
        // })->get();
        return $student;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //student table
        $student = Student::create([
            'name' => 'Sahil',
            'age' => 45,
            "gender" => "Male"
        ]);

        //contact table
        $student->contact()->create([
            'email' => 'sahil@gmail.com',
            'phone' => '4785896587',
            'address' => '218 jahangir pura',
            'city' => 'Valsad'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::paginate(5);
        return view ('students.index', compact('students'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
        ]);

        Student::create($data);

        return redirect('/students')->with('success', 'Student added successfully.');
    }
}


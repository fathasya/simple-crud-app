<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index() {
        // Use Query Builder
        // $students = DB::table('students')->get();

        // Use Eloquent ORM
        $students = Student::paginate(5);
        // return $students;
        return view('student.index', [
            'students' => $students
        ]);
    }

    public function addStudent() {
        return view('student.create');
    }

    public function postStudent(Request $request) {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone
        ];
        Student::create($data);
        
        return redirect('/student');
    }

    public function updateStudent($id) {
        $data = Student::findOrFail($id);
        return view('student.update', [
            'students' => $data
        ]);
    }

    public function postUpdate(Request $request, $id) {
        $student = Student::findOrFail($id);
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->phone = $request->input('phone');
        $student -> save();

        return redirect('/student')->with('success', 'Berhasil Update Data');
    }

    public function deleteStudent($id) {
        $data = Student::findOrFail($id);
        $data -> delete();

        return redirect('/student');
    }
}

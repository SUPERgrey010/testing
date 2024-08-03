<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $data = [
            'page_title' => 'Students'
        ];

        return view('student', $data);
    }
}

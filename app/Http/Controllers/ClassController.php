<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ClassRoom;

class ClassController extends Controller
{
    public function index()
    {
        $data = ClassRoom::all();
        return view('class', ['classlist' => $data]);
    }
}

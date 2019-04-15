<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\artikel;

class blogController extends Controller
{
    public function index(){
        $blogs = artikel::all();
        $nama = "Ini halaman Blog";
        return view("admin.index",compact('blogs','nama'));
    }
}

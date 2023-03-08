<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sekolah;

class UserController extends Controller
{
    public function index() {
        return view ('index');
    }

    public function about() {
        return view ('about');
    }

    public function data() {
        $data_skl=Sekolah::all();
        return view('about', compact('data_skl'));
    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SisController extends Controller
{
    public function index() {
     return view('coba');   
    }
    
    public function tabel() {
        return view('admin.table');   
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JtabcController extends Controller
{
    public function index(){

      return view('index');
    }

    public function projects(){

      return view('inc.project_detailed');
    }
}

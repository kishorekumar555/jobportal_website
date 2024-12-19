<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddJobsController extends Controller
{
    public function addjobs(){
        return view('addjobs');
    }
}

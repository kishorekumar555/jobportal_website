<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FindJobsController extends Controller
{
    public function showJobsPage(){
        return view('Jobs');
    }
}

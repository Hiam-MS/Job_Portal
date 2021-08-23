<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class CompanyController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }

    public function showJob()
    {
        $job =Job::all();
        return view('company.job',compact('job'));
    }
}

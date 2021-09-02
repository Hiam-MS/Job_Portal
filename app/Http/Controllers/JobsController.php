<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobsController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function JobDetails($id)

    {
        
        $job = Job::find($id);
        return view('company.job-Details',compact('job'));
       

        
    }


    public function addJob()
    {
        return view('company.addJob');
    }
}

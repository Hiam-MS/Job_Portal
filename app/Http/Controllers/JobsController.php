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



     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     
    public function storeJob(Request $Request)
    {
        $job =new Job ;
        $job->company_name = $Request->input("company_name");
        $job->job_position =  $Request->input("job_position");
        $job->country =  $Request->input("country");
        $job->city =  $Request->input("city");
        $job->number_of_employess =  $Request->input("number_of_employess");
        $job->save();

    }
}

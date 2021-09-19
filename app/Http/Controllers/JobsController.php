<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Company;

use Illuminate\Support\Facades\DB;


class JobsController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function addJob()
    {
        return view('job.addJob');
    }

    public function JobDetails($id)

    {
        $job = Job::find($id);
        return view('job.jobDetails',compact('job'));
    }

    public function showJob()
    {
        $job =Job::all();
        return view('job.showJobs',compact('job'));
    }

   



     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     
    public function storeJob(Request $Request)
    {


        $query =DB::table('jobs')->insert([
            'company_name'=>$Request->input('company_name'),
            'job_position'=>$Request->input('job_position'),
            'country'=>$Request->input('country'),
            'city'=>$Request->input('city'),
            'job_position'=>$Request->input('job_position'),
            'number_of_employess'=>$Request->input('number_of_employess')
    
           ]);


        if($query){
            return back()->withInput()->with('success','  تمت الاضافة بنجاح');
        }else{
            return back()->withInput()->with('fail','هناك خطأ ما');
        }

    }
}

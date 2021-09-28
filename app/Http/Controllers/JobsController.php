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
            'job_title'=>$Request->input('job_title'),
            'number_of_employess'=>$Request->input('number_of_employess'),
            'salary'=>$Request->input('salary'),
            'job_requirement'=>$Request->input('job_requirement'),
            'functional_tasks'=>$Request->input('functional_tasks'),
            'country'=>$Request->input('country'),
            'city'=>$Request->input('city'),
            'gender'=>$Request->input('gender'),
            'military_service'=>$Request->input('military_service'),
            'degree'=>$Request->input('degree'),
            'job_type'=>$Request->input('job_type')
         
           ]);


        if($query){
            return redirect()->route('CompanyJob')->with('success','  تمت الاضافة بنجاح');
        }else{
            return back()->withInput()->with('fail','هناك خطأ ما');
        }

    }
}

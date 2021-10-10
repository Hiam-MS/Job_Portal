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
        if(isset(auth()->user()->GetCompany)){
        $company=auth()->user()->getCompany;
        return view('job.addJob',compact('company'));
    }
    else
    return redirect()->route('company.profile');
      
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
        
        $job =new Job ;
        $job->company_name = $Request->input("company_name");
        $job->job_title =  $Request->input("job_title");
        $job->number_of_employess= $Request->input("number_of_employess");
        $job->salary= $Request->input("salary");
        $job->job_requirement = $Request->input("job_requirement");
        $job->functional_tasks = $Request->input("functional_tasks");
        $job->country= $Request->input("country");
        $job->city= $Request->input("city");
        $job->gender= $Request->input("gender");
        $job->military_service= $Request->input("military_service");
        $job->degree= $Request->input("degree");
        $job->job_type= $Request->input("job_type");
        $job->company_id= auth()->user()->GetCompany->id;

        $job->save();

       


        if($job){
            return redirect()->route('CompanyJob')->with('success','  تمت الاضافة بنجاح');
        }else{
            return back()->withInput()->with('fail','هناك خطأ ما');
        }

    }
}

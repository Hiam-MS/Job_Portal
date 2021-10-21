<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Company;
use App\Models\JobCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class JobsController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function addJob()
    {
        if(isset(auth()->user()->GetCompany)){
        $categories = JobCategory::all();
        $company=auth()->user()->getCompany;
        return view('job.addJob',compact('company','categories'));
    }
    else
    return redirect()->route('company.profile');
      
    }

    public function JobDetails($id)

    {
        if(auth()->user())
        {
            if(Auth()->user()->role == 'p') {
                $job = Job::find($id);
                $person_id = auth()->user()->GetPerson->id;


               


                $exist = DB::table('applyed_jobs')->where('job_id', $id)->where('person_id', $person_id)->first();
                if ($exist == null)
                {
                    $result = 'not exist';          
                } 
                else
                {
                    $result = 'exist';
                }  
             return view('job.jobDetails',compact('job','result'));
            }
          else{
            $job = Job::find($id);
            
            
            return view('job.jobDetails',compact('job'));
          }


       
        } 
     
       
        else
        {
            $job = Job::find($id);
            return view('job.jobDetails',compact('job'));
        }
   
      
    }




    public function showJob(Request $request)
    {
        $categories = JobCategory::all();
        $category = $request->input('category');
        $search = $request->input('search');
       
        

        if($request->has('category')) {
            $jobs = Job::where('category_id', $category)
                    ->orderBy('created_at', 'desc')
                    ->paginate(5)
                    ;
            
        }
        else{
            $jobs = Job::paginate(5);
        }

        



        // if(isset($_GET['category'])){
            
        //     $search_text= $_GET['category'];
        //     $jobs= Job::where('category_id',$category)->paginate(2);
           
            
        //     }else{
        //         $jobs = Job::paginate(5);
               
        //     }
        
        return view('job.showJobs',compact('categories','jobs','category','search'));
    }

    



     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     
    public function storeJob(Request $Request)
    { 
        $Request->validate([
            'category'=>'required',
            'job_title'=>'required'
        ],[
            'category.required'=>'يجب اختيار اختصاص العمل المطلوب',
        ]);
        
        $job =new Job ;
        $job->company_name = $Request->input("company_name");
        $job->job_title =  $Request->input("job_title");
        $job->number_of_employess= $Request->input("number_of_employess");
        $job->budget= $Request->input("budget");
        $job->job_requirement = $Request->input("job_requirement");
        $job->functional_tasks = $Request->input("functional_tasks");
        $job->country= $Request->input("country");
        $job->city= $Request->input("city");
        $job->gender= $Request->input("gender");
        $job->military_service= $Request->input("military_service");
        $job->degree= $Request->input("degree");
        $job->job_type= $Request->input("job_type");
        $job->category_id = $Request->input('category');
        $job->company_id= auth()->user()->GetCompany->id;

        $job->save();

       


        if($job){
            return redirect()->route('CompanyJob')->with('success','  تمت الاضافة بنجاح');
        }else{
            return back()->withInput()->with('fail','هناك خطأ ما');
        }

    }


    
}

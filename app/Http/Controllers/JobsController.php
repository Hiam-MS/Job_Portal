<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Company;
use App\Models\JobCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use Carbon\Carbon;

class JobsController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function addJob()
    {
        if(isset(auth()->user()->GetCompany))
        {
            $categories = JobCategory::all();
            $company=auth()->user()->getCompany;
            return view('job.addJob',compact('company','categories'));
        }
        else
        {
            return redirect()->route('company.profile');
        }
   
      
    }

    public function JobDetails($id)
    {
        if(auth()->user())
        {
            if(Auth()->user()->role == 'p')
            {
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
          else
            {
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
        if($request->has('category')) 
        {
            $jobs = Job::where('category_id', $category)
            ->whereDate('end_job', '>', Carbon::today()->toDateString())
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        }
        else
        {
            $jobs = Job::whereDate('end_job', '>', Carbon::today()->toDateString())->Where('status','=','accepted')->paginate(10);
        }
         
        

     
        
        return view('job.showJobs',compact('jobs','category','categories'));
        
       
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
            'job_title'=>'required',
            'number_of_employess'=>'required',
            'budget'=>'required',
            'job_requirement'=>'required',
            'functional_tasks'=>'required',
            'end_job'=>'required',
           
            'city'=>'required',
            'gender'=>'required',
            'military_service'=>'required',
            'degree'=>'required',
            'job_type'=>'required',
            
        ],[
            'job_title.required'=>'يجب ادخال المسمى الوظيفي لفرصة العمل',
            'category.required'=>'يجب اختيار اختصاص العمل المطلوب',
            'number_of_employess.required'=>'يجب اختيار اختصاص العمل المطلوب',
            'budget.required'=>'يجب  ادخال الراتب المطلوب لهذه الوظيفة او الفوائد',
            'job_requirement.required'=>'يجب  ادخال  المؤهلات المطلوبة لهذه الوظيفة  ',
            'functional_tasks.required'=>'يجب  ادخال  المؤهلات المطلوبة لهذه الوظيفة  ',
            'end_job.required'=>'يجب  اختيار المدة المعينة لعرض فرصة العمل  ',
            
            'city.required'=>'يجب  اختيار المدينة  ',
            'gender.required'=>'يجب  اختيار الجنس المطلوب للعمل  ',
            'military_service.required'=>'يجب  اختيار  طبيعة خدمة العلم  ',
            'degree.required'=>'يجب  اختيار  الحد الادنى المطلوب لفرصة العمل  ',
            
            'job_type.required'=>'يجب  اختيار   طبيعة فرصة العمل  ',
        ]);

        $selected=$Request->input("end_job");

    
   
        
        $job =new Job ;
        $job->company_name = $Request->input("company_name");
        $job->job_title =  $Request->input("job_title");
        $job->number_of_employess= $Request->input("number_of_employess");
        $job->budget= $Request->input("budget");
        $job->job_requirement = $Request->input("job_requirement");
        $job->functional_tasks = $Request->input("functional_tasks");
        // $job->end_job=$Request->input("end_job");
        $job->end_job = Carbon::now()->addDays($selected);
        $job->country= $Request->input("country");
        $job->city= $Request->input("city");
        $job->gender= $Request->input("gender");
        $job->military_service= $Request->input("military_service");
        $job->degree= $Request->input("degree");
        $job->job_type= $Request->input("job_type");
        $job->category_id = $Request->input('category');
        $job->company_id= auth()->user()->GetCompany->id;

       

    


        if($job){
            $job->save();
            return redirect()->route('CompanyJob')->with('success','  تمت الاضافة بنجاح');
        }else{
            return back()->withInput()->with('fail','هناك خطأ ما');
        }

    }


    
}

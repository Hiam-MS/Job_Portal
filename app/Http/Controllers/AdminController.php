<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\City;
use DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Job;
use App\Models\Person;

class AdminController extends Controller
{
    
    public function getDash()
    {
        return view('admin.dashboard');
    }

    public function show()
    {
        $country =Country::all();
        return view('admin.add-Country',compact('country'));
    }


    // public function addCountry()
    // {
    //     $country =new Country();

    //     $country->country_name="امارات";
    //     $country->save();
    //     return "DOOOOON";
        
    // }
    // public function addCity($id)
    // {
    //     $country =Country::find($id);
    //     $city= new City();
    //     $city->city_name="دبي";
    //     $country->cities()->save($city);
    //     return "DOne";

    // }


    public function pendingJob()
    {
        
        $job = DB::table('jobs')->where('status', 'pending')->get();
        return view('admin.pending_job',compact('job'));
         


    }

    public function accepte_JobStatuse($id){
      
        $job = Job::find($id);
        $job->status ='accepted' ;
        $job->save();
            
        if($job){
           
            return redirect()->route('pendingJob')->with('success','  تمت القبول بنجاح');
        }else{
            
            return redirect()->route('pendingJob')->with('fail','  هناك خطأ ما');
        }

    }

    public function denied_JobStatuse($id){
      
        
        $job = Job::find($id);
        $job->status = 'denied';
        $job->save();
            
        if($job){
           
            return redirect()->route('pendingJob')->with('success','  تمت القبول بنجاح');
        }else{
            
            return redirect()->route('pendingJob')->with('fail','  هناك خطأ ما');
        }

    }
    


    
   
    
    
}

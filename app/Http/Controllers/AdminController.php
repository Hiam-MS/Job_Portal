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
use App\Models\Company;
use App\Models\Person;
use App\Models\Governorate;


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

    public function showCompany()
    {
        if(Auth()->user()->role == 'a'){
            $companies=User::where(function ($query) {
                $query->where('role', 'c')
                      ->orWhere('role', 'd');
                    })
        ->orderBy('created_at', 'desc')
        ->paginate(10);
        
 
            return view ('admin.showCompany',compact('companies'));
        }
        else{
            abort(403);
        }
        
    }
    public function BanCompany(Request $request){

        $id = $request->id;
    	$user = User::find($id);
    	$user->role = 'd';
    	$user->save();
        return back();
       
    }
    public function unBanCompany(Request $request){

        $id = $request->id;
    	$user = User::find($id);
    	$user->role = 'c';
    	$user->save();
        return back();
    }

    public function showPeople(){
        if(Auth()->user()->role == 'a'){
            $people=User::where(function ($query) {
                $query->where('role', 'p')
                      ->orWhere('role', 'e');
                    })
        ->orderBy('created_at', 'desc')
        ->paginate(10);
        
 
            return view ('admin.showPeople',compact('people'));
        }
        else{
            abort(403);
        }
        
    }
    public function BanPeople(Request $request){
        $id = $request->id;
    	$user = User::find($id);
    	$user->role = 'e';
    	$user->save();
        return back();
       
    }
    public function unBanPeople(Request $request){
        $id = $request->id;
    	$user = User::find($id);
    	$user->role = 'p';
    	$user->save();
        return back();
       
    }
    public function showJobs(){
        
        return view('admin.showPeople');
    }

    // public function showCitites(){
    //     if(Auth()->user()->role == 'a'){
    //         $cities=City::paginate(30);
    //     $governorates=Governorate::all();
 
    //         return view ('admin.city.show',compact('cities'));
    //     }
    //     else{
    //         abort(403);
    //     }
  
    // }
    public function showGovernorate(){
        
        return view('admin.showPeople');
    }
    public function showCompanyActivity(){
        
        return view('admin.showPeople');
    }
    public function showCategory(){
        
        return view('admin.showPeople');
    }
    public function addCategory(){
        
        return view('admin.showPeople');
    }
    public function addCompanyActivity(){
        
        return view('admin.showPeople');
    }
    public function addCity(){
        
        return view('admin.showPeople');
    }
    public function addGovernorate(){
        
        return view('admin.showPeople');
    }
  
 



    
   
    
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Company;

use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }
    
    public function getAddCompanyForm()
    {
        return view('company.profile');
    }

    public function showJob()
    {
        $job =Job::all();
        return view('company.job',compact('job'));
    }

    public function storeProfile(Request $Request)
    {



        $Request->validate([
            'company_name_ar'=>'required|string',
            'company_name_en'=>'required|string',
            'email'=>'required|email',
            'fixed_phone'=>'required|integer',
            'fax_phone'=>'required|integer',
            'location'=>'required',
            'company_specialist'=>'required',
            'commercial_record'=>'required',
            'industria_record'=>'required',
            'website'=>'required:companies'

        ]);


       $query =DB::table('companies')->insert([
        'company_name_ar'=>$Request->input('company_name_ar'),
        'company_name_en'=>$Request->input('company_name_en'),
        'email'=>$Request->input('email'),
        'fixed_phone'=>$Request->input('fixed_phone'),
        'fax_phone'=>$Request->input('fax_phone'),
        'location'=>$Request->input('location'),
        'company_specialist'=>$Request->input('company_specialist'),
        'commercial_record'=>$Request->input('commercial_record'),
        'industria_record'=>$Request->input('industria_record'),
        'website'=>$Request->input('website')

       ]);

       if($query){
           return back()->withInput()->with('success','  تمت الاضافة بنجاح');
       }else{
           return back()->withInput()->with('fail','هناك خطأ ما');
       }
        // $profile =new Company ;
        // $profile->company_name_ar = $Request->input("company_name_ar");
        // $profile->company_name_en = $Request->input("company_name_en");
        // $profile->email = $Request->input("email");
        // $profile->fixed_phone = $Request->input("fixed_phone");
        // $profile->fax_phone = $Request->input("fax_phone");
        // $profile->location = $Request->input("location");
        // $profile->company_specialist = $Request->input("company_specialist");
        // $profile->commercial_record=$Request->input('commercial_record');
        // $profile->industria_record=$Request->input('industria_record');
        // $profile->website=$Request->input('website');
        // $profile->save();

    }


}

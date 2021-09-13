<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class CompanyController extends Controller
{
    //
    public function index()
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
        $profile =new Company ;
        $profile->company_name_ar = $Request->input("company_name_ar");
        $profile->company_name_en = $Request->input("company_name_en");
        $profile->email = $Request->input("email");
        $profile->fixed_phone = $Request->input("fixed_phone");
        $profile->fax_phone = $Request->input("fax_phone");
        $profile->location = $Request->input("location");
        $profile->location = $Request->input("company_specialist");
        $profile->save();

    }


}

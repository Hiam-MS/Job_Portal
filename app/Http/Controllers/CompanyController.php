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
        return view('company.addProfile');
    }

    public function showCompany()
    {
        $company=Company::all();

        return view ('company.showCompany',compact('company'));
    }

    public function editCompanyProfile()
    {
       
        $company=auth()->user()->GetCompany;
        return view('company.editProfile',compact('company'));
    }

    public function updatCompanyProfile(Request $Request,$id)
    {
        $company=Company::find($id);
        $company->company_name_ar=$Request->company_name_ar;
        $company->company_name_en=$Request->company_name_en;
        $company->email=$Request->email;
        $company->fixed_phone=$Request->fixed_phone;
        $company->fax_phone=$Request->fax_phone;
        $company->location=$Request->location;
        $company->company_specialist=$Request->company_specialist;
        $company->commercial_record=$Request->commercial_record;
        $company->industria_record=$Request->industria_record;
        $company->website=$Request->website;

        $company->save();

        if($company){
            return back()->withInput()->with('success','  تم التعديل بنجاح');
        }else{
            return back()->withInput()->with('fail','هناك خطأ ما');
        }
        
        
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

        $company =new Company ;
            $company->company_name_ar = $Request->input("company_name_ar");
            $company->company_name_en =  $Request->input("company_name_en");
            $company->email= $Request->input("email");
            $company->fixed_phone= $Request->input("fixed_phone");
            $company->fax_phone = $Request->input("fax_phone");
            $company->location= $Request->input("location");
            $company->company_specialist= $Request->input("company_specialist");
            $company->commercial_record= $Request->input("commercial_record");
            $company->industria_record= $Request->input("industria_record");
            $company->website= $Request->input("website");
         
            $company->user_id= auth()->user()->id;

          

        $company->save();
       
       if($company){
           
           return redirect()->route('CompanyDash')->with('success','  تمت الاضافة بنجاح');
       }else{
           return back()->withInput()->with('fail','هناك خطأ ما');
       }


    }


    public function getDash()
    {
        return view('company.company_dash');
    }

    public function getJob()
    {
        if(isset(auth()->user()->GetPerson)){
        $company=auth()->user()->GetCompany;
        return view('company.shortList', compact('company'));}
        else{
            return redirect()->route('company.profile');
        }
    }


}

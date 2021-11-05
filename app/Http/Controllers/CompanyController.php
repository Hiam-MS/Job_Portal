<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Company;
use Carbon\Carbon;


use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }
    
    public function createProfile()
    {
        return view('company.addProfile');
    }

    public function showCompany()
    {
        $company=Company::all();

        return view ('company.showCompany',compact('company'));
    }
    public function viewProfile()
    {
        $company=auth()->user()->GetCompany;
        return view('company.viewProfile',compact('company'));
    }

    public function editCompanyProfile()
    {
        if(isset(auth()->user()->GetCompany)){
        $company=auth()->user()->GetCompany;
        return view('company.editProfile',compact('company'));
        }
        else
        return redirect()->route('company.profile');
    }

    public function updatCompanyProfile(Request $Request,$id)
    {
        $Request->validate([
            'company_name_ar'=>'required',
            'company_name_en'=>'required',
            'email'=>'required|email',
            'fixed_phone'=>'required|alpha_num',
            'fax_phone'=>'required|alpha_num',
            'location'=>'required',
            'company_specialist'=>'required',
            'commercial_record'=>'required|alpha_num',
            'industria_record'=>'required|alpha_num',
            'website'=>'required:companies',
        

        ],[
            'company_name_ar.required'=>'بجب ادخال الاسم بالعربي',
            'company_name_en.required'=>'بجب ادخال الاسم بالانكليزي',
            'email.required'=>'بجب ادخال البريد الالكتروني للشركة  ',
            'fixed_phone.required'=>'بجب ادخال رقم الهاتف الأرضي ',
            'fax_phone.required'=>'بجب ادخال رقم  الفاكس ',
            'location.required'=>'بجب ادخال عنوان الشركة   ',
            'company_specialist.required'=>'بجب ادخال اختصاص عمل الشركة  ',
            'commercial_record.required'=>'بجب ادخال  السجل التجاري ',
            'industria_record.required'=>'بجب ادخال  السجل الصناعي  ',
            'website.required'=>'بجب ادخال موقع  الشركة  ',
        ]);
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

        

        if($company){
            $company->save();
            return back()->withInput()->with('success','  تم التعديل بنجاح');
        }else{
            return back()->withInput()->with('fail','هناك خطأ ما');
        }
        
        
    }

  

    public function storeProfile(Request $Request)
    {



        $Request->validate([
            'company_name_ar'=>'required|',
            
            'email'=>'required|email',
            'fixed_phone'=>'required|numeric',
            'fax_phone'=>'required|numeric',
            'location'=>'required',
            'company_specialist'=>'required',
            'commercial_record'=>'required|alpha_num|',
            'industria_record'=>'required|alpha_num',
            'website'=>'required|starts_with:www',
        

        ],[
            'company_name_ar.required'=>'بجب ادخال الاسم بالعربي',
      
            'email.required'=>'بجب ادخال البريد الالكتروني للشركة  ',
            'fixed_phone.required'=>'بجب ادخال رقم الهاتف الأرضي ',
            'fax_phone.required'=>'بجب ادخال رقم  الفاكس ',
            'location.required'=>'بجب ادخال عنوان الشركة   ',
            'company_specialist.required'=>'بجب ادخال اختصاص عمل الشركة  ',
            'commercial_record.required'=>'بجب ادخال  السجل التجاري ',
            'industria_record.required'=>'بجب ادخال  السجل الصناعي  ',
            'website.required'=>'بجب ادخال موقع الانترنت للشركة  ',
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

          

        
       
       if($company){
        $company->save();
           return redirect()->route('CompanyDash')->with('success','  تمت الاضافة بنجاح');
       }else{
           return back()->withInput()->with('fail','هناك خطأ ما');
       }


    }


    public function getDash()
    {
        return view('company.company_dash');
    }
// get company published jobs
    public function getJob()
    {
        
        if(isset(auth()->user()->GetCompany))
        {
            $company=auth()->user()->GetCompany;
            $company_id=auth()->user()->GetCompany->id;

            $jobs = Job::where('company_id', $company_id)
            ->whereDate('end_job', '>', Carbon::today()->toDateString())
            ->orderBy('created_at', 'desc')
            ->paginate(5);

          
            return view('company.shortList', compact('company','jobs'));
        }
        else
        {
            return redirect()->route('company.profile');
        }
       
       
    }

    public function endJobs()
    {
        
        if(isset(auth()->user()->GetCompany))
        {
            $company=auth()->user()->GetCompany;
            $company_id=auth()->user()->GetCompany->id;

            $jobs = Job::where('company_id', $company_id)
            ->whereDate('end_job', '<=', Carbon::today()->toDateString())
            ->orderBy('created_at', 'desc')
            ->paginate(5);

          
            return view('company.endJobs', compact('company','jobs'));
        }
        else
        {
            return redirect()->route('company.profile');
        }
       
       
    }


    public function update_JobEnd($id){
      
        $company=auth()->user()->GetCompany;
        $job = Job::find($id);
        $job->end_job =Carbon::now() ;
        $job->save();
            
            return back()->withInput()->with('success','  تم الانهاء بنجاح');

    }


   


}

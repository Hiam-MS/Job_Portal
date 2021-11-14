<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\PersonSkill;
use App\Models\PersonEducation;
use App\Models\PersonExperience;
use App\Models\PersonCourse; 
use Illuminate\Support\Facades\DB;
use App\Models\JobCategory;
use App\Models\PersonCategory;
use App\Models\ApplyedJob;

use Illuminate\Support\Facades\Session;




class PersonController extends Controller
{
   

    public function index()

    {

        return view('person.person_dash');
    }

    public function ViewpersonalInfo()
    {
        if(isset(auth()->user()->GetPerson)){
        $Person = auth()->user()->GetPerson;
       
        return view('person.ViewPersonInfo',compact('Person'));
        }
        else
        return redirect()->route('resuem.create');

        
    }

    

    public function viewResuemForm(Request $request)
    {
        // if(isset($_GET['query'])){
            
        // $search_text= $_GET['query'];
        // $Person= Person::where('name','LIKE','%'.$search_text.'%')->paginate(2);
        // //$Person=appends($request->all());
        // return view('person.viewResuem',compact('Person'));
        // }else{
        //     $Person=Person::paginate(10);
        //     return view('person.viewResuem',compact('Person'));
        // }
        
       
        $Person=Person::select("*")->orderBy("created_at", "desc")->paginate(10);

        return view('person.viewResuem',compact('Person'));

    

}

//   search resume    //



public function searchResume(Request $request)
    {

        $Person = DB::table('people')
        ->join('person_education', 'people.id', '=', 'person_education.person_id')
        ->where('degree_name','LIKE','%' . $request->get('serchQuest') . '%')->get();

        return json_encode( $Person);
        
        

 }





    public function ResuemDetails($id)
    {
        $Person = Person::find($id);
     
        return view('person.ResuemDetail',compact('Person'));


    }

 
// personal inf

    public function createResume()
    {
        if(isset(auth()->user()->GetPerson)){

            return redirect()->route('PersonDash');

            

        }
        else
        return view('person.addResume');
    }


    public function store(Request $Request)

    {
       

        $Request->validate([
            'fname'=> ['required','string' , 'max:20'] ,
            'father_name'=> ['required','string' , 'max:20'] ,
            'Lname'=> ['required','string', 'max:20'] ,
            // 'email'=> ['required','string'] ,
        //   'national_number'=> ['numeric'] ,
            'gender'=> ['required'] ,
            'military_service'=> ['required'] ,
            'marital_status'=> ['required'] ,
            'dob'=> ['required','date'] ,
            'place_Of_b'=> ['required','string'] ,
            // 'Current_address'=> ['required','string'] ,
            // 'fixed_phone'=> ['required','integer'] ,
            'mobile_number'=> ['required','string'] ,
            'lang'=>['required'] ,

            'user_id'=>['unique:Person'] ,
          
        ],[
            'fname.required'=>'يجب تعبئة حقل الاسم',
            'father_name.required'=>'يجب  تعبئة  حقل اسم الأب',
            'Lname.required'=>'يجب تعبئة حقل الكنية  ',
            // 'email.required'=>'يجب  ادخال البريد الالكتروني ',
        //    'national_number.required'=>'يجب  ادخال حقل الرقم الوطني  ',
            
            'gender.required'=>'يجب اختيار حقل الجنس  ',
            'military_service.required'=>'يجب   اختيار حقل خدمة العلم ',
            'marital_status.required'=>'يجب  اختيار حقل الوضع العائلي   ',
            'dob.required'=>'يجب ادخال  حقل  تاريخ  الميلاد   ',
            'place_Of_b.required'=>'يجب ادخال  حقل  مكان  الولادة   ',
           
            // 'Current_address.required'=>'يجب  ادخال حقل  مكان الاقامة الحالي   ',
            // 'fixed_phone.required'=>'يجب  تعبئة  حقل الهاتف الأرضي  ',
            'mobile_number.required'=>'يجب تعبئة حقل رقم الموبايل   ',
            'lang.required'=>'يجب  اختيار حقل  اللغة   ',
        ]);
        
        $person =new Person ;
            $person->Fname = $Request->input("fname");
            $person->Father_name = $Request->input("father_name");
            $person->Lname = $Request->input("Lname");
            $person->gender= $Request->input("gender");
            $person->dob= $Request->input("dob");
            $person->place_Of_b = $Request->input("place_Of_b");
            $person->marital_status= $Request->input("marital_status");
            $person->military_service= $Request->input("military_service");
            $person->mobile_number= $Request->input("mobile_number");
            // $person->national_number= $Request->input("national_number");
            // $person->Current_address= $Request->input("Current_address");
            // $person->fixed_phone= $Request->input("fixed_phone");
             // $person->email =  $Request->input("email");
            // $person->lang= $Request->input("lang");
            // $person->img= $Request->input("img");
            $person->user_id= auth()->user()->id;

          

        $person->save();
    
       return redirect()->route('PersonDash');

     }


    //Edit  Personal-Info

    public function editPersonalInfo()
{

    if(isset(auth()->user()->GetPerson)){
        $person = auth()->user()->GetPerson;
        return view('person.editPersonalInfo',compact('person'));

    }
    else
    return view('person.addResume');
   
 }

public function updatPersonalInfo(Request $Request)
 {
      $Request->validate([
            'fname'=> ['required','string' , 'max:20'] ,
            'father_name'=> ['required','string' , 'max:20'] ,
            'Lname'=> ['required','string', 'max:20'] ,
            'email'=> ['required','string'] ,
            'dob'=> ['required','date'] ,
            'place_Of_b'=> ['required','string'] ,
             'national_number'=> ['required','numeric','start_with:0','max:11'] ,
            'fixed_phone'=> ['required','integer'] ,
            'Current_address'=> ['required','string'] ,
            'mobile_number'=> ['required','string'] ,
        
       
          
        ]);

 $person = auth()->user()->GetPerson;

            $person->Fname = $Request->input("fname");
            $person->Father_name = $Request->input("father_name");
            $person->Lname = $Request->input("Lname");
            $person->email =  $Request->input("email");
            $person->gender= $Request->input("gender");
            $person->dob= $Request->input("dob");
            $person->place_Of_b = $Request->input("place_Of_b");
            $person->national_number= $Request->input("national_number");
            $person->marital_status= $Request->input("marital_status");
            $person->military_service= $Request->input("military_service");
            $person->Current_address= $Request->input("Current_address");
            $person->fixed_phone= $Request->input("fixed_phone");
            $person->mobile_number= $Request->input("mobile_number");
            $person->lang= $Request->input("lang");
            $person->img= $Request->input("img");
            $person->user_id= auth()->user()->id;

    $person->save();

    if($person){
        return redirect()->route('PersonDash')->with('success','  تم تعديل المعلومات الشخصية بنجاح');
    }else{
        return back()->withInput()->with('fail','هناك خطأ ما');
    }


        
    }






///////////////////////////////////////////////////////////edit///////////////////
 
//show resume for add edu - skills - courses
    public function createResumeEdu()
    {
        if(isset(auth()->user()->GetPerson)){
        $jobCat =JobCategory::all();
        $person = auth()->user()->GetPerson;
        $pid= $person->id;

        $person_cat = DB::table('job_categories')
        ->join('person_categories', 'job_categories.id', '=', 'person_categories.category_id')
        ->where('person_categories.person_id', $pid)->get();
       
        return view('person.addResumeEdu',compact('person','jobCat','person_cat'));
        }
        else
        return redirect()->route('resuem.create');
    }

// show form for add person Education
    public function createPersonEdu($id)
    {

        return view('person.addEdu', ['id' => $id]);
    }


//store person Education
    public function storePersonEdu(Request $Request)

    {
        $person =auth()->user()->GetPerson;
        $Request->validate([
            'degree_name'=> ['required','string'] ,
            'Institution'=> ['required','string'] ,
            'Degree'=> ['required','string'] ,
            'Major'=> ['required','string'] ,
            'Graduation_year'=> ['required'] ,
            'Country'=> ['required'] ,
            'person_id'=>['unique:Person'] ,
          

           
          
        ],[
            'degree_name.required'=>'يجب تعبئة حقل اسم الشهادة',
            'Institution.required'=>'يجب  تعبئة  حقل  المؤسسة التعليمية',
            'Degree.required'=>'يجب  اختيار الدرجة/الشهادة    ',
            'Major.required'=>'يجب    تعبئة حقل اختصاص الشهادة ',
            'Graduation_year.required'=>'يجب     اختيار تاريخ سنة التخرج  ',
            'Country.required'=>'يجب   ادخال حقل دولة الدراسة   ',
           
        ]);

        $arrayTostring =implode(',',$Request->input('still_study'));
        
        $personEdu =new PersonEducation ;
            $personEdu->degree_name = $Request->input("degree_name");
            $personEdu->Institution =  $Request->input("Institution");
            $personEdu->Degree= $Request->input("Degree");
            $personEdu->Major= $Request->input("Major");
            $personEdu->Graduation_year = $Request->input("Graduation_year");
            $personEdu->still_study = $arrayTostring;
            $personEdu->Country = $Request->input("Country");
         
            $personEdu->person_id=  auth()->user()->GetPerson->id;
            $personEdu->save();

            return redirect()->route('edu');
        //    return redirect()->route('edu', ['id' => $id]);
          
 }


        //show form for add person *****Experience*****
    // public function createPersonExp($id)
    // {

    //     return view('person.addExperience', ['id' => $id]);
    // }

//store person Experience
    public function storePersonExp(Request $Request)

    {

        $Request->validate([
            'Job_title'=> ['required','string'] ,
            'job_Specialize'=> ['required','string'] ,
            'company_name'=> ['required','string'] ,
            'company_address'=> ['required','string'] ,
            'Start_date'=> ['required','date'] ,
            'end_date'=> ['required','date'] ,
            'Responsibilities'=> ['required'] ,
          
        ],[
            'Job_title.required'=>'يجب تعبئة حقل  المنصب الوظيفي',
            'job_Specialize.required'=>'يجب  تعبئة  حقل   اختصاص العمل',
            'company_name.required'=>'يجب   تعبئة حقل اسم الشركة',
            'company_address.required'=>'يجب    تعبئة حقل  عنوان الشركة ',
            'Start_date.required'=>'يجب     اختيار تاريخ بدء العمل   ',
            'end_date.required'=>'يجب     اختيار تاريخ انتهاء العمل   ',
            'Responsibilities.required'=>'يجب  تعبئة حقل المسؤوليات   ',
           
        ]);

            $personExp =new PersonExperience ;
            $personExp->Job_title = $Request->input("Job_title");
            $personExp->job_Specialize =  $Request->input("job_Specialize");
            $personExp->company_name= $Request->input("company_name");
            $personExp->company_address= $Request->input("company_address");
            $personExp->Start_date = $Request->input("Start_date");
            $personExp->end_date = $Request->input("end_date");
            $personExp->Responsibilities= $Request->input("Responsibilities");
            $personExp->person_id= auth()->user()->GetPerson->id;
            if($personExp){
                $personExp->save();
                return redirect()->route('edu')->with('success','  تمت الاضافة بنجاح');
            }else{
                return back()->withInput()->with('fail','هناك خطأ ما');
            }
           
            
           
       
      
        }

         //show form for add person *****Skill*****
    // public function createPersonSkill($id)
    // {

    //     return view('person.addSkill', ['id' => $id]);
    // }

//store person Skill
    public function storePersonSkill(Request $Request)

    {
        $Request->validate([
            'name'=> ['required','string'] ,
         
          
        ],[
            'name.required'=>'يجب   ادخال حقل اسم المهارة     ',
        ]);

        $personSkill =new PersonSkill ;
            $personSkill->name = $Request->input("name");
           $personSkill->person_id= auth()->user()->GetPerson->id;
           
          
           if($personSkill){
            $personSkill->save();
            return redirect()->route('edu')->with('success','  تمت الاضافة بنجاح');
        }else{
            return back()->withInput()->with('fail','هناك خطأ ما');
        }
            
           
           
 }


          //show form for add person *****Course*****
    // public function createPersonCourse($id)
    // {

    //     return view('person.addCourse', ['id' => $id]);
    // }

//store person ****Course****
    public function storePersonCourse(Request $Request)

    {
        $Request->validate([
            'name'=> ['required','string'] ,
         
          
        ]);

        $PersonCourse =new PersonCourse ;
            $PersonCourse->name = $Request->input("name");
           $PersonCourse->person_id= auth()->user()->GetPerson->id;
           

           
            if($PersonCourse){
                $PersonCourse->save();
                return redirect()->route('edu')->with('success','  تمت الاضافة بنجاح');
            }else{
                return back()->withInput()->with('fail','هناك خطأ ما');
            }
           
           
        }

// **********  show form for Job Category *******

// public function createResumeJobCat($id)
// {
//     $jobCat =JobCategory::all();
//     $Person = Person::find($id);
//     return view('person.addCategory',compact('Person','jobCat'));
// }
    

// store person job category


public function storePersonJobCat(Request $Request)

{
    $input = $Request->input("category");
    foreach($input as $cat){
    $PersonCategory =new PersonCategory ;
        $PersonCategory->category_id= $cat;
       $PersonCategory->person_id= auth()->user()->GetPerson->id;
     $PersonCategory->save();
    }

    return redirect()->route('edu');

   // $id = $Request->input("pid");
    //return redirect()->route('edu', ['id' => $id]);

   
    }

                  /////////////////  DELETE ************

    public function DeletePersonSkill($id)
    {
         $res=PersonSkill::find($id)->delete();
  if ($res){
    
    return redirect()->back()->with('success', ' تم الحذف بنجاح');
}else{
    
    return redirect()->back()->with('success', ' لم يتم الحذف يرجى المحاولة مرة ثانية');
 
  }
}

public function DeletePersonEdu($id)
    {
         $res=PersonEducation::find($id)->delete();
  if ($res){
    
    return redirect()->back()->with('success', ' تم الحذف بنجاح');
}else{
    
    return redirect()->back()->with('success', ' لم يتم الحذف يرجى المحاولة مرة ثانية');
 
  }
}

public function DeletePersonCourse($id)
    {
         $res=PersonCourse::find($id)->delete();
  if ($res){
    
    return redirect()->back()->with('success', ' تم الحذف بنجاح');
}else{
    
    return redirect()->back()->with('success', ' لم يتم الحذف يرجى المحاولة مرة ثانية');
 
  }
}

public function DeletePersonExperience($id)
    {
         $res=PersonExperience::find($id)->delete();
  if ($res){
    
    return redirect()->back()->with('success', ' تم الحذف بنجاح');
}else{
    
    return redirect()->back()->with('success', ' لم يتم الحذف يرجى المحاولة مرة ثانية');
 
  }
}

public function DeletePersonCat($id)
    {
        if(isset(auth()->user()->GetPerson)){
            $person = auth()->user()->GetPerson;}
            $pid= $person->id;


        $res=PersonCategory::where('person_id',$pid)->where('category_id',$id)->delete();
  if ($res){
    
    return redirect()->back()->with('success', ' تم الحذف بنجاح');
}else{
    
    return redirect()->back()->with('success', ' لم يتم الحذف يرجى المحاولة مرة ثانية');
 
  }
}
//////////////////////////////

// ************  UPDATE ****************
// ************  UPDATE COURSE ****************

public function editPersonCourse($cid)
{
   

   $course= PersonCourse::find($cid);
   if($course && $course->person_id == auth()->user()->GetPerson->id){
    return view('person.editCourse',compact('course')); 
}
else

     abort(404);

}

public function updateCourse(Request $Request)
{
    $Request->validate([
        'name'=> ['string'] ,
     
      
    ]);

    // $id = $Request->input("pid");
    $cid = $Request->input("cid");

    
       
    $course = PersonCourse::where('id' , $cid)
       ->update([
        'name' => $Request->input("name"),
        'person_id' => auth()->user()->GetPerson->id,

       ]);
       if ($course){
    
        return redirect()->route('edu')->with('success', ' تم التعديل بنجاح');
    }else{
        
        return redirect()->back()->with('fail', ' لم يتم التعديل يرجى المحاولة مرة ثانية');
     
      }   
        


    }
// ************  UPDATE SKILL ****************

public function editPersonSkill($cid )
{

   $skill= PersonSkill::find($cid);
   if($skill && $skill->person_id == auth()->user()->GetPerson->id ){
    return view('person.editSkill',compact('skill'));
   }

    else

     abort(404);

}

public function updateSkill(Request $Request)
{
    $Request->validate([
        'name'=> ['string'] ,
     
      
    ]);
    $cid = $Request->input("cid");

    $skill = PersonSkill::where('id' , $cid)
       ->update([
        'name' => $Request->input("name"),
        'person_id' => auth()->user()->GetPerson->id,

       ]);
         
       if ($skill){
    
        return redirect()->route('edu')->with('success', ' تم التعديل بنجاح');
    }else{
        
        return redirect()->back()->with('fail', ' لم يتم التعديل يرجى المحاولة مرة ثانية');
     
      }   
}


// ************  UPDATE Edu ****************

public function editPersonEdu($cid)
{

   $Edu= PersonEducation::find($cid);
   
       
    return view('person.editEdu',compact('Edu'));

    

}

public function updateEdu(Request $Request)
 {
//     $Request->validate([
//         //  'degree_name'=> ['required','string'] ,
//         //     'Institution'=> ['string'] ,
//         //     'Degree'=> ['string'] ,
//         //     'Major'=> ['string'] ,
//         //     'Graduation_year'=> ['Date'] ,
     
      
//     ]);

    
    $cid = $Request->input("cid");

    
       
    $Edu = PersonEducation::where('id' , $cid)
       ->update([
        'degree_name' => $Request->input("degree_name"),
        'Institution' => $Request->input("Institution"),
        'Degree' => $Request->input("Degree"),
        'Major' => $Request->input("Major"),
        'Graduation_year' => $Request->input("Graduation_year"),
        'Country' => $Request->input("Country"),
        'person_id' =>  auth()->user()->GetPerson->id,

       ]);
       if($Edu){
        return redirect()->route('edu')->with('success','  تمّ التعديل بنجاح');
    }else{
        return back()->withInput()->with('fail','هناك خطأ ما');
    }
         
        


    }

// edit person exp
    public function editPersonExperience($cid)
{
    
   $Exp= PersonExperience::find($cid);
   if($Exp && $Exp->person_id == auth()->user()->GetPerson->id ){
       
    return view('person.editExperience',compact('Exp'));
   
   }
   else
      abort(404);

}
// update oerson exp
public function updateExperience(Request $Request)
 {


    
    $cid = $Request->input("cid");

    
       
    $Exp = PersonExperience::where('id' , $cid)
       ->update([
        'Job_title' => $Request->input("Job_title"),
        'job_Specialize' => $Request->input("job_Specialize"),
        'company_name' => $Request->input("company_name"),
        'company_address' => $Request->input("company_address"),
        'Start_date' => $Request->input("Start_date"),
        'end_date' => $Request->input("end_date"),
        'Responsibilities' => $Request->input("Responsibilities"),
        'person_id' =>  auth()->user()->GetPerson->id,

       ]);
       if($Exp){
        
        return redirect()->route('edu')->with('success','  تمّ التعديل بنجاح');
    }else{
        return back()->withInput()->with('fail','هناك خطأ ما');
    }
         
   


    }


 
    
    


 
    













}

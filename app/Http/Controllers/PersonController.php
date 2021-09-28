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
        if(isset($_GET['query'])){
            
        $search_text= $_GET['query'];
        $Person= Person::where('name','LIKE','%'.$search_text.'%')->paginate(2);
        //$Person=appends($request->all());
        return view('person.viewResuem',compact('Person'));
        }else{
            $Person=Person::paginate(10);
            return view('person.viewResuem',compact('Person'));
        }

    }

  
    

    public function ResuemDetails($id)
    {
        $Person = Person::find($id);
       
        return view('person.ResuemDetail',compact('Person'));
    }

 


    public function createResume()
    {
        return view('person.addResume');
    }


    public function store(Request $Request)

    {
       

        $Request->validate([
            'name'=> ['required','string'] ,
            'email'=> ['required','string'] ,
            'dob'=> ['required','string'] ,
            'place_Of_b'=> ['required','string'] ,
            'national_number'=> ['required','integer'] ,
            'fixed_phone'=> ['required','integer'] ,
            'Current_address'=> ['required','string'] ,
            'mobile_number'=> ['required','string'] ,
            // 'user_id'=>['unique:Person'] ,
          
        ]);
        
        $person =new Person ;
            $person->name = $Request->input("name");
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
    
       return redirect()->route('edu');

     }

///////////////////////////////////////////////////////////edit///////////////////
 
//show resume for add edu - skills - courses
    public function createResumeEdu()
    {
        if(isset(auth()->user()->GetPerson)){
        $jobCat =JobCategory::all();
        $person = auth()->user()->GetPerson;
       
        return view('person.addResumeEdu',compact('person','jobCat'));
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
          $Request->validate([
            // 'degree_name'=> ['required','string'] ,
            // 'Institution'=> ['required','string'] ,
            // 'Degree'=> ['required','string'] ,
            // 'Major'=> ['required','string'] ,
            // 'Graduation_year'=> ['required','integer'] ,
            
          
        ]);

        
        $personEdu =new PersonEducation ;
            $personEdu->degree_name = $Request->input("degree_name");
            $personEdu->Institution =  $Request->input("Institution");
            $personEdu->Degree= $Request->input("Degree");
            $personEdu->Major= $Request->input("Major");
            $personEdu->Graduation_year = $Request->input("Graduation_year");
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
            // 'Job_title'=> ['required','string'] ,
            // 'job_Specialize'=> ['required','string'] ,
            // 'company_name'=> ['required','string'] ,
            // 'company_address'=> ['required','string'] ,
            // 'Start_date'=> ['required','integer'] ,
            // 'end_date'=> ['required','integer'] ,
            // 'Responsibilities'=> ['required','integer'] ,
          
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

            $personExp->save();
            
           
           return redirect()->route('edu');

      
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
            // 'name'=> ['required','string'] ,
         
          
        ]);

        $personSkill =new PersonSkill ;
            $personSkill->name = $Request->input("name");
           $personSkill->person_id= auth()->user()->GetPerson->id;
           
           $personSkill->save();
          
            
           return redirect()->route('edu');
           
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
            // 'name'=> ['required','string'] ,
         
          
        ]);

        $PersonCourse =new PersonCourse ;
            $PersonCourse->name = $Request->input("name");
           $PersonCourse->person_id= auth()->user()->GetPerson->id;
           

            $PersonCourse->save();
           
            
           return redirect()->route('edu');
           
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
         
        return redirect()->route('edu');


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

    $course = PersonSkill::where('id' , $cid)
       ->update([
        'name' => $Request->input("name"),
        'person_id' => auth()->user()->GetPerson->id,

       ]);
         
        return redirect()->route('edu');
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
         
        return redirect()->route('edu');


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
//     $Request->validate([
//         //  'Job_title'=> ['required','string'] ,
//         //     'job_Specialize'=> ['string'] ,
//         //     'company_name'=> ['string'] ,
//         //     'company_address'=> ['string'] ,
//         //     'Start_date'=> ['Date'] ,
// 'end_date'=> ['Date'] ,
// 'Responsibilities'=> ['string'] ,
     
      
//     ]);

    
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
         
        return redirect()->route('edu');


    }
    
    













}

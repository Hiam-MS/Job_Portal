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




class PersonController extends Controller
{
    public function index()

    {

        return view('person.addSkill');
    }

    public function showall()
    {
        $Person =Person::all();
        return view('',compact('Person'));
    }


    public function show($id)

    {
        
        $Person = Person::find($id);
        return view('test',compact('Person'));
  
    }

    public function viewResuemForm(Request $request)
    {
        if(isset($_GET['query'])){
            
        $search_text= $_GET['query'];
        $Person= Person::where('name','LIKE','%'.$search_text.'%')->paginate(2);
        $Person=appends($request->all());
        return view('person.viewResuem',compact('Person'));
        }else{
            $Person=Person::paginate(3);
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
            'mobile_number'=> ['required','integer'] ,
          
        ]);
        //$lang = $Request->input("lang");
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
            ///$person->lang= $Request->input("lang");

        $person->save();
       $id= $person->id;
       return redirect()->route('edu', ['id' => $id]);

       //return redirect('/');

       //return view('person.addEdu');
       
        
    }


 
//show resume for add edu - skills - courses
    public function createResumeEdu($id)
    {
        $jobCat =JobCategory::all();
       $Person = Person::find($id);
        return view('person.addResumeEdu',compact('Person','jobCat'));
        
    }

//show form for add person Education
    public function createPersonEdu($id)
    {

        return view('person.addEdu', ['id' => $id]);
    }
//store person Education
    public function storePersonEdu(Request $Request)

    {
        $personEdu =new PersonEducation ;
            $personEdu->degree_name = $Request->input("degree_name");
            $personEdu->Institution =  $Request->input("Institution");
            $personEdu->Degree= $Request->input("Degree");
            $personEdu->Major= $Request->input("Major");
            $personEdu->Graduation_year = $Request->input("Graduation_year");
            
            $personEdu->person_id= $Request->input("pid");
           

            $personEdu->save();
            $id = $personEdu->person_id;
            
           //return redirect()->route('edu');
           return redirect()->route('edu', ['id' => $id]);

       //return redirect('/');

       //return view('person.addEdu');
        }


        //show form for add person *****Experience*****
    public function createPersonExp($id)
    {

        return view('person.addExperience', ['id' => $id]);
    }
//store person Experience
    public function storePersonExp(Request $Request)

    {
        $personExp =new PersonExperience ;
            $personExp->Job_title = $Request->input("Job_title");
            $personExp->job_Specialize =  $Request->input("job_Specialize");
            $personExp->company_name= $Request->input("company_name");
            $personExp->company_address= $Request->input("company_address");
            $personExp->Start_date = $Request->input("Start_date");
            $personExp->end_date = $Request->input("end_date");
            $personExp->Responsibilities= $Request->input("Responsibilities");
            
            $personExp->person_id= $Request->input("pid");
           

            $personExp->save();
            $id = $personExp->person_id;
            
           //return redirect()->route('edu');
           return redirect()->route('edu', ['id' => $id]);

       //return redirect('/');

       //return view('person.addEdu');
        }

         //show form for add person *****Skill*****
    public function createPersonSkill($id)
    {

        return view('person.addSkill', ['id' => $id]);
    }
//store person Skill
    public function storePersonSkill(Request $Request)

    {
        $personSkill =new PersonSkill ;
            $personSkill->name = $Request->input("name");
           $personSkill->person_id= $Request->input("pid");
           

            $personSkill->save();
            $id = $personSkill->person_id;
            
           //return redirect()->route('edu');
           return redirect()->route('edu', ['id' => $id]);

       //return redirect('/');

       //return view('person.addEdu');
        }


          //show form for add person *****Course*****
    public function createPersonCourse($id)
    {

        return view('person.addCourse', ['id' => $id]);
    }
//store person ****Course****
    public function storePersonCourse(Request $Request)

    {
        $PersonCourse =new PersonCourse ;
            $PersonCourse->name = $Request->input("name");
           $PersonCourse->person_id= $Request->input("pid");
           

            $PersonCourse->save();
            $id = $PersonCourse->person_id;
            
           //return redirect()->route('edu');
           return redirect()->route('edu', ['id' => $id]);

       //return redirect('/');

       //return view('person.addEdu');
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
       $PersonCategory->person_id= $Request->input("pid");

       
       $PersonCategory->save();
    }

        $id = $Request->input("pid");
        
        
      
       return redirect()->route('edu', ['id' => $id]);

   
    }























}

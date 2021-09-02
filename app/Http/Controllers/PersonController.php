<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\PersonSkill;
use App\Models\PersonEducation;




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

    public function viewResuemForm()
    {
        $Person=Person::all();
       
        
        
     
        return view('person.viewResuem',compact('Person'));
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
        $Person = Person::find($id);
        return view('person.addResumeEdu',compact('Person'));
    }

//show form for add person Education
    public function createPersonEdu($id)
    {

        return view('person.addEdu', ['id' => $id]);
    }

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

}

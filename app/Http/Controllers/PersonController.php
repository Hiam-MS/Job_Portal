<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\PersonSkill;




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
        $resuem =Person::all();
        return view('person.viewResuem',compact('resuem'));
    }

    public function ResuemDetails($id)
    {
        $resuem = Person::find($id);
        $skills = PersonSkill::orderBy('skill', 'asc')->get();
        $educations = PersonEducation::where('id', $resuem->id)
        ->orderBy('created_at', 'desc')
        ->get();

        //$experience = PersonExperience::orderBy('experience', 'asc')->get();




        return view('company.job-Details',compact('resuem','skills','educations'));
    }

    public function res_det()
    {
        return view('person.ResuemDetail');
        
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

        return redirect()->route('edu', [$person]);
       
        //return redirect('/');
       
        
    }

    public function createResumeEdu()
    {
        return view('person.addResumeEdu');
    }

    public function createPersonEdu()
    {
        return view('person.addEdu');
    }


}

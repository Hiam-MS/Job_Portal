<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\PersonSkill;



class PersonController extends Controller
{
    public function index()

    {

        
        return view('test');
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

}

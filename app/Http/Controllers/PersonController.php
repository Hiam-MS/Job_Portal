<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;



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

}

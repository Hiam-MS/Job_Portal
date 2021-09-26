<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\City;

class AdminController extends Controller
{
    //


    public function show()
    {
        $country =Country::all();
        return view('admin.add-Country',compact('country'));
    }


    public function addCountry()
    {
        $country =new Country();

        $country->country_name="امارات";
        $country->save();
        return "DOOOOON";
        
    }
    public function addCity($id)
    {
        $country =Country::find($id);
        $city= new City();
        $city->city_name="دبي";
        $country->cities()->save($city);
        return "DOne";

    }
    public function getDash()
    {
        return view('admin.dashboard');
    }



    
    
}

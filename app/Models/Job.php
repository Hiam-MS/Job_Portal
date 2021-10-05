<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    //Job belongs to one Company
    function Company() 
    {
    	return $this->belongsTo(Company::class);
    }

    //Jobs has one Job category
    function jobCategory() 
    {
    	return $this->belongsTo(JobCategory::class);
    }

    //Job has many Person 
    public function PersonTOThisJobs()
    
    {
        return $this->belongsToMany(Person::class);
    }

    //Job has one city
   function City()
    {
        return $this->belongsTo(City::class);
    }




}

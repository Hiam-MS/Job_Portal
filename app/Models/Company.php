<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    
    //Company has many job
    public function Job()
    {
        return $this->hasMany(Job::class);
    }
    function companyActivity() 
    {
    	return $this->belongsTo(CompanyActivity::class);
    }
    public function City()
    {
        return $this->belongsTo(City::class);
    }
    
}

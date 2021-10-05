<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplyedJob extends Model
{
    use HasFactory;



    public function Job()
    
    {
        return $this->belongsToMany(Job::class)->withTimeStamps();
    }
    
}

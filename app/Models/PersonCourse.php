<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonCourse extends Model
{
    use HasFactory;
    //protected $table = 'people';

    protected $primaryKey = 'id';

   

    //protected $fillable = ['name'];



    public function Person()

    {
        return $this->belongTo(Person::class);
    }

}

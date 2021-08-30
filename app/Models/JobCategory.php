<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';


    public function Person()

{
    return $this->belongsToMany(Person::class);

}

}

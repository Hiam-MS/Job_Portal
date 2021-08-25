<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonSkill extends Model
{
    use HasFactory;

    protected $table = 'person-_skills';

    protected $primaryKey = 'id';


    public function Person()

{
    return $this->belongTo(Person::class);
}
}

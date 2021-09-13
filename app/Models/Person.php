<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    protected $table = 'people';

    protected $primaryKey = 'id';

    protected $casts = [
        'lang' => 'json'
    ];

    //protected $fillable = ['name'];



    //Person has one or more  Skill
    public function PersonSkill()
    {
        return $this->hasMany(PersonSkill::class);
    }

    //Person has one or more Course
    public function PersonCousre()
    {
        return $this->hasMany(PersonCourse::class);
    }

    //Person has one or more Experience
    public function PersonExperience()
    {
        return $this->hasMany(PersonExperience::class);
    }

    //Person has one or more Education
    public function PersonEducation()
    {
        return $this->hasMany(PersonEducation::class);
    }

    //Person has many Job Category
    public function JobCategory()

    {
        return $this->belongsToMany(JobCategory::class);

    }

    //Person has manyJob
    public function Job()
    {
        return $this->belongsToMany(Job::class);
    }

}

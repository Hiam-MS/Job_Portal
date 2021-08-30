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



public function PersonSkill()

{
    return $this->hasMany(PersonSkill::class);
}

public function PersonCousre()

{
    return $this->hasMany(PersonCousre::class);
}

public function PersonExperience()

{
    return $this->hasMany(PersonExperience::class);
}


public function PersonEducation()

{
    return $this->hasMany(PersonEducation::class);
}

public function JobCategory()

{
    return $this->belongsToMany(JobCategory::class);

}

}

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

}

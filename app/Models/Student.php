<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Student extends Authenticatable
{
    use HasFactory;
    protected $guard = 'students';
    protected $fillable = [
        'year_id', 'subject_id', 'rollNo', 'Eyear', 'name', 'fatherName', 'motherName',
        'nationality', 'nationalityFather', 'nationalityMother', 'religion', 'religionFather',
        'religionMother', 'birthplace', 'nrc', 'fatherNrc', 'motherNrc', 'birthDate', 'phone',
        'fatherPhone', 'motherPhone', 'living', 'password', // etc.
    ];

    public function year()
    {
        return $this->belongsTo(Year::class);
    }
    
    public function major()
    {
        return $this->belongsTo(Major::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
    public function file(){

        return $this->hasMany(studentFile::class);
    }
    
}

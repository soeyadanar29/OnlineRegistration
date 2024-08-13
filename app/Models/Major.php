<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    use HasFactory;
    
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    public function subject(){
        return $this->hasMany(Subject::class);
    }
}

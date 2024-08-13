<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = [
        'year_id','major_id','semester_id','subjectName','subjectCode'
    ];
    public function year(){
        return $this->belongsTo(Year::class);
    }
    public function major(){
        return $this->belongsTo(Major::class);
    }
    public function semester(){
        return $this->belongsTo(Semester::class);
    }
}

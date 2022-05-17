<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quiz extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];

    public function courseML()
    {
        return $this->belongsTo(CoursesMultiLanguage::class, 'course_ml_id');
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}

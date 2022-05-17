<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];

    /**
     * @return HasMany
     */
    public function lessons(): HasManyThrough // projects
    {
        return $this->hasManyThrough(
            Lesson::class,
            CoursesMultiLanguage::class,
            'course_id', // Foreign key on the course_multi_languages table...
            'course_ml_id', // Foreign key on the lessons table...
            'id', // Local key on the courses table...
            'id' // Local key on the course_multi_languages table...
        );
    }

    public function multiLanguages(): HasMany
    {
        return $this->hasMany(CoursesMultiLanguage::class);
    }

    public function languages(): HasMany
    {
        return $this->hasMany(CoursesMultiLanguage::class);
    }

    public function getPath()
    {
        return 'courses-data/' . $this->course_path;
    }
}

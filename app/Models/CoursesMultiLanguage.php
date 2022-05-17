<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class CoursesMultiLanguage extends Model
{
    use HasFactory, SoftDeletes;
    protected $appends = ['path'];
    protected $guarded = [];
    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        if (session()->has('set-locale-id'))
            static::addGlobalScope('active_language', function (Builder $builder) {
                $builder->where('language_id', session()->get('set-locale-id'));
            });
    }

    public function language(): BelongsTo
    {
        return $this->belongsTo(Language::class);
    }

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    public function lessons(): HasMany
    {
        return $this->hasMany(Lesson::class, 'course_ml_id', 'id');
    }
    public function getPath()
    {
        return 'courses-data/' . $this->course->course_path . '/';
    }

    public function getPathAttribute()
    {
        return config('filesystems.disks.s3.s3-url') . $this->getPath() . $this->image;
    }

    //quizzes

    public function quizzes(): HasMany
    {
        return $this->hasMany(Quiz::class, 'course_ml_id', 'id');
    }
}

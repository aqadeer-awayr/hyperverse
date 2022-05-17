<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Cache;

class CustomText extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'custom_texts';
    protected $casts = [
        'data' => 'array'
    ];
    protected $guarded = [];
    public static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            Cache::flush();
        });

        self::created(function ($model) {
            Cache::flush();
        });

        self::updating(function ($model) {
            Cache::flush();
        });

        self::updated(function ($model) {
            Cache::flush();
        });

        self::deleting(function ($model) {
            Cache::flush();
        });

        self::deleted(function ($model) {
            Cache::flush();
        });
    }

    public function getJsonDataAttribute()
    {
        return json_decode($this->data);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}

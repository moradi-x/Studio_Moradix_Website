<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',

        // اطلاعات فارسی
        'title',
        'short_description',
        'description',

        // اطلاعات انگلیسی
        'title_en',
        'short_description_en',
        'description_en',

        'slug',
        'primary_image',
        'project_url',
        'github_url',
        'status',
    ];

    // هر پروژه متعلق به یک دسته‌بندی است
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // هر پروژه چند تصویر دارد
    public function images()
    {
        return $this->hasMany(ProjectImage::class);
    }

    // هر پروژه چند ویژگی دارد
    public function features(): BelongsToMany
    {
        return $this->belongsToMany(
            Feature::class,
            'feature_project'
        )->withTimestamps();
    }

    // وضعیت پروژه
    public function getStatusLabelAttribute(): string
    {
        return (int) $this->status === 1
            ? 'تکمیل شده'
            : 'در حال توسعه';
    }
}
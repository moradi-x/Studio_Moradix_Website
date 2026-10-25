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
        'title',
        'slug',
        'short_description',
        'description',
        'primary_image',
        'project_url',
        'github_url',
        'status',

    ];




    // | هر پروژه متعلق به یک دسته بندی است



    public function category()
    {
        return $this->belongsTo(Category::class);
    }



    // | هر پروژه چند تصویر دارد

    public function images()
    {
        return $this->hasMany(ProjectImage::class);
    }

    
    public function features(): BelongsToMany
    {
        return $this->belongsToMany(
            Feature::class,
            'feature_project'
        )->withTimestamps();
    }
}

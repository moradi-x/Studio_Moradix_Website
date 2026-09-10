<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


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
        'featured',

    ];



    /*
    |--------------------------------------------------------------------------
    | Category Relation
    |--------------------------------------------------------------------------
    |
    | هر پروژه متعلق به یک دسته بندی است
    |
    */

    public function category()
    {
        return $this->belongsTo(Category::class);
    }




    /*
    |--------------------------------------------------------------------------
    | Images Relation
    |--------------------------------------------------------------------------
    |
    | هر پروژه چند تصویر دارد
    |
    */

    public function images()
    {
        return $this->hasMany(ProjectImage::class);
    }




    /*
    |--------------------------------------------------------------------------
    | Technologies Relation
    |--------------------------------------------------------------------------
    |
    | چند به چند با تکنولوژی‌ها
    |
    */

    public function technologies()
{
    return $this->belongsToMany(
        Technology::class,
        'project_technology'
    );
}

}
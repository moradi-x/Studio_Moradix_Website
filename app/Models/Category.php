<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
use HasFactory;
    protected $fillable = [
        'name',
        'slug',
    ];


    /*
    |--------------------------------------------------------------------------
    | Relationship
    |--------------------------------------------------------------------------
    |
    | یک دسته‌بندی چند پروژه دارد
    |
    */

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

}
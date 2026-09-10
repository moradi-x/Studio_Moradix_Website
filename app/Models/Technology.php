<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
use HasFactory;
    protected $fillable = [

        'name',
        'slug',
        'description',

    ];



    /*
    |--------------------------------------------------------------------------
    | Projects Relation
    |--------------------------------------------------------------------------
    |
    | یک تکنولوژی می‌تواند در چند پروژه استفاده شود
    |
    */

    public function projects()
{
    return $this->belongsToMany(
        Project::class,
        'project_technology'
    );
}

}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $fillable = [

    'title',
    'slug',
    'description',
    'image',
    'technology',
    'client',
    'category',
    'demo_url',
    'github_url',
    'content'

];

}
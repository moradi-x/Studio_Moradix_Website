<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectRequest extends Model
{
use HasFactory;
    protected $fillable = [

        'name',
        'email',
        'phone',
        'project_type',
        'budget',
        'description',
        'status',

    ];

}
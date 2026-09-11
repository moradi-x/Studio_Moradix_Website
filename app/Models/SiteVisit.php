<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteVisit extends Model
{
    use HasFactory;

    protected $fillable = [
        'visit_date',
        'session_hash',
    ];

    protected $casts = [
        'visit_date' => 'date',
    ];
}
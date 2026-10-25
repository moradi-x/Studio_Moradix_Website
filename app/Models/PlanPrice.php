<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlanPrice extends Model
{
    protected $fillable = [
        'service_type',
        'basic_price',
        'professional_price',
    ];
}
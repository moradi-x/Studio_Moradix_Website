<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudioTechnology extends Model
{
    protected $fillable = [
        'name',
        'logo',
        'sort_order',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
            'sort_order' => 'integer',
        ];
    }
}

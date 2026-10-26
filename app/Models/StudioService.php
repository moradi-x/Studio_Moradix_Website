<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudioService extends Model
{
    protected $fillable = [
        'title',
        'icon',
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

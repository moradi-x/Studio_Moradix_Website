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
        'category_id',
        'budget',
        'description',
        'status',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * تبدیل وضعیت انگلیسی به فارسی
     */
    public function getStatusLabelAttribute(): string
    {
        return match ($this->status) {
            'new' => 'جدید',
            'contacted' => 'در حال پیگیری',
            'completed' => 'تکمیل شده',
            'rejected' => 'رد شده',
            default => $this->status,
        };
    }
}
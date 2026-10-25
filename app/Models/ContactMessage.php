<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    use HasFactory;

    protected $fillable = [
        'request_type',
        'name',
        'phone',
        'project_type',
        'message',
    ];



    public function getRequestTypeLabelAttribute(): string
    {
        return match ($this->request_type) {
            'consultation' => 'مشاوره‌ی رایگان',
            'project' => 'ثبت درخواست پروژه',
            default => 'نامشخص',
        };
    }

    public function getProjectTypeLabelAttribute(): string
    {
        return match ($this->project_type) {
            'not-sure' => 'هنوز مشخص نیست',
            'website-design' => 'طراحی وب‌سایت',
            'online-shop' => 'طراحی فروشگاه اینترنتی',
            'wordpress-upgrade' => 'بازطراحی و ارتقای سایت',
            'custom-system' => 'سیستم‌های اختصاصی',
            'seo-speed' => 'سئو',
            default => 'نامشخص',
        };
    }
}

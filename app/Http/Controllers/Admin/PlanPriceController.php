<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PlanPrice;
use Illuminate\Http\Request;

class PlanPriceController extends Controller
{
    public function index()
    {
        $plans = PlanPrice::all()->keyBy('service_type');

        return view('admin.plan-prices.index', compact('plans'));
    }

    public function edit(PlanPrice $planPrice)
    {
        return view('admin.plan-prices.edit', compact('planPrice'));
    }





    public function update(Request $request, PlanPrice $planPrice)
    {
        $convertNumbers = fn($value) => strtr((string) $value, [
            '۰' => '0',
            '۱' => '1',
            '۲' => '2',
            '۳' => '3',
            '۴' => '4',
            '۵' => '5',
            '۶' => '6',
            '۷' => '7',
            '۸' => '8',
            '۹' => '9',
            '٠' => '0',
            '١' => '1',
            '٢' => '2',
            '٣' => '3',
            '٤' => '4',
            '٥' => '5',
            '٦' => '6',
            '٧' => '7',
            '٨' => '8',
            '٩' => '9',
        ]);

        $request->merge([
            'basic_price' => $convertNumbers($request->input('basic_price')),
            'professional_price' => $convertNumbers($request->input('professional_price')),
        ]);

        $validated = $request->validate([
            'basic_price' => ['required', 'integer', 'min:0'],
            'professional_price' => ['required', 'integer', 'min:0'],
        ]);

        $planPrice->update($validated);

        return redirect()
            ->route('admin.plan-prices.index')
            ->with('success', 'قیمت پلن‌ها با موفقیت به‌روزرسانی شد.');
    }
}

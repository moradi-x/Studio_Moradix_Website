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
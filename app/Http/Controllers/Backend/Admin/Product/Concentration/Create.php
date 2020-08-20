<?php

declare(strict_types = 1);

namespace App\Http\Controllers\Backend\Admin\Product\Concentration;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Support\Facades\Gate;
use App\Models\Category;

class Create extends Controller
{
    /**
     * Show create concentration form.
     *
     * @return View
     */
    public function __invoke(): View
    {
        Gate::authorize('admin');

        $categories = Category::all();
        $currentRouteName = 'backend.admins.products';
        
        return view(
            'backend.admin.product.concentration.create',
            compact('categories', 'currentRouteName')
        );
    }
}

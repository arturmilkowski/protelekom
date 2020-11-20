<?php

declare(strict_types = 1);

namespace App\Http\Controllers\Frontend\Page;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class Service extends Controller
{
    /**
     * Service front page.
     *
     * @return View
     */
    public function __invoke(): View
    {
        $currentRouteName = 'frontend.pages.service';

        return view('frontend.page.service', compact('currentRouteName'));
    }
}

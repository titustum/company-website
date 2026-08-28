<?php

namespace App\View\Composers;

use App\Models\Industry;
use App\Models\Service;
use App\Models\Solution;
use Illuminate\View\View;

class NavigationComposer
{
    /**
     * Bind published navigation items to the layout.
     */
    public function compose(View $view): void
    {
        $view->with('navigationServices', Service::published()->orderBy('sort_order')->get(['id', 'title', 'slug']))
            ->with('navigationSolutions', Solution::published()->orderBy('sort_order')->get(['id', 'title', 'slug']))
            ->with('navigationIndustries', Industry::published()->orderBy('sort_order')->get(['id', 'title', 'slug']));
    }
}

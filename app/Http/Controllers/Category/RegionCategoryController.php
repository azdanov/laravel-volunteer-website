<?php

declare(strict_types=1);

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Region;
use Illuminate\View\View;
use SEO;
use function compact;

class RegionCategoryController extends Controller
{
    public function index(): View
    {
        SEO::setTitle('Region');

        $categories = Category::get()->toTree();

        return view('region_category.index', compact('categories'));
    }

    public function show(Region $region): View
    {
        SEO::setTitle($region->name);

        $categories = Category::withListingsInRegion($region)->get()->toTree();

        return view('region_category.show', compact('categories', 'region'));
    }
}

<?php

declare(strict_types=1);

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Region;
use Illuminate\View\View;
use function compact;

class CategoryController extends Controller
{
    public function index(): View
    {
        $categories = Category::withListings()->get()->toTree();

        return view('category.index', compact('categories'));
    }
}

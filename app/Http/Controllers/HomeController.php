<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Contracts\View\View;
use function compact;

class HomeController extends Controller
{
    public function index(): View
    {
        $regions = Region::get()->toTree();

        return view('home.index', compact('regions'));
    }
}

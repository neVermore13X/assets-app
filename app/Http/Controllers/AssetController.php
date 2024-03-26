<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AssetController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $assets = Asset::latest()->paginate(5);

        //render view with posts
        return view('dashboard.assets', compact('assets'));
    }
}

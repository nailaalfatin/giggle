<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Slider;
use App\Models\Story;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories     = Category::all();
        $stories        = Story::all();
        $sliders        = Slider::all();
        $trendingStory  = Story::where('trending', 1)->with('slides')->get();
        return view('frontend.index', compact('categories', 'trendingStory', 'stories', 'sliders'));
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Level;
use App\Models\Slider;
use App\Models\Story;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index() {
        $categories     = Category::all();
        $stories        = Story::all();
        $sliders        = Slider::all();
        $trendingStory  = Story::where('trending', 1)->with('slides')->get();
        return view('frontend.index', compact('categories', 'trendingStory', 'stories', 'sliders'));
    }

    public function categories() {
        $categories = Category::where('status', '0')->get();
        return view('frontend.collections.category.index', compact('categories'));
    }

    public function stories($category_slug){
        $levels     = Level::all();
        $category   = Category::where('slug', $category_slug)->with('stories.level')->first();
        if ($category) {
            return view('frontend.collections.stories.index', [
                'category'  => $category,
                'levels'    => $levels
            ]);
        } else {
            return redirect()->back();
        }
    }

    public function storyView(string $category_slug, string $story_slug) {
        $category = Category::where('slug', $category_slug)->first();

        if($category) {
            $story = $category->stories()->where('slug', $story_slug)->first();
            if($story)
            {
                return view('frontend.collections.stories.detail', compact('category', 'story'));
            }
            else
            {
                return redirect()->back();
            }

        }else{
            return redirect()->back();
        }
    }

    public function trending() {
        $trendingStory = Story::where('trending', 1)->with('slides')->get();
        return view('frontend.trending.index', compact('trendingStory'));
    }
}

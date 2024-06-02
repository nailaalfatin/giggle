<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoryRequest;
use App\Models\Category;
use App\Models\Slide;
use App\Models\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function index()
    {
        $stories = Story::with('slides')->get();
        return view('admin.story.index', compact('stories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.story.create', compact('categories'));
    }

    public function store(StoryRequest $request)
    {
        $story = Story::create(['title' => $request->title]);

        foreach ($request->file('images') as $index => $image) {
            $ext = $image->getClientOriginalExtension();
            $fileName = time() . '_' . $index . '.' . $ext; // Menggunakan time() dan index untuk memastikan nama file unik
            $image->move('upload/story', $fileName); // Menyimpan gambar ke folder 'upload/category'

            Slide::create([
                'story_id' => $story->id,
                'image_path' => 'upload/story/' . $fileName, // Menyimpan path relatif gambar di database
                'description' => $request->descriptions[$index],
            ]);
        }

        return redirect()->route('story')->with('success', 'Story Added Successfully');
    }

    public function edit($id)
    {
        $story = Story::with('slides')->findOrFail($id);
        return view('admin.story.edit', compact('story'));
    }

    public function update(StoryRequest $request, $id)
    {
        $story = Story::findOrFail($id);
        $story->update(['title' => $request->title]);

        // Hapus slides lama
        Slide::where('story_id', $story->id)->delete();

        foreach ($request->file('images') as $index => $image) {
            $ext = $image->getClientOriginalExtension();
            $fileName = time() . '_' . $index . '.' . $ext; // Menggunakan time() dan index untuk memastikan nama file unik
            $image->move('upload/story', $fileName); // Menyimpan gambar ke folder 'upload/story'

            Slide::create([
                'story_id' => $story->id,
                'image_path' => 'upload/story/' . $fileName, // Menyimpan path relatif gambar di database
                'description' => $request->descriptions[$index],
            ]);
        }

        return redirect()->route('story')->with('success', 'Story Updated Successfully');
    }

    public function delete($id)
    {
        $story = Story::findOrFail($id);

        // Hapus gambar dari folder
        foreach ($story->slides as $slide) {
            if (file_exists(public_path($slide->image_path))) {
                unlink(public_path($slide->image_path));
            }
        }

        // Hapus slides yang terkait
        Slide::where('story_id', $story->id)->delete();

        // Hapus story
        $story->delete();

        return redirect()->route('story')->with('success', 'Story Deleted Successfully');
    }
}

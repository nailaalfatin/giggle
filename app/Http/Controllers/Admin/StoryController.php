<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoryRequest;
use App\Models\Category;
use App\Models\Level;
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
        $levels     = Level::all();
        return view('admin.story.create', compact('categories', 'levels'));
    }

    public function store(StoryRequest $request)
    {
        // Validasi data dari request
        $validatedData = $request->validate([
            'title'             => 'required|string',
            'category_id'       => 'required|numeric',
            'level_id'          => 'required|numeric',
            'trending'          => 'nullable',
            'author'            => 'required|string',
            'meta_title'        => 'nullable|string',
            'small_description' => 'nullable|string',
            'images.*'          => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'descriptions.*'    => 'nullable|string',
        ]);

        // Simpan data Story
        $story = new Story([
            'title'             => $validatedData['title'],
            'category_id'       => $validatedData['category_id'],
            'level_id'          => $validatedData['level_id'],
            'trending'          => $request->trending == true ? '1' : '0',
            'author'            => $request->author ?? 'Unknown',
            'meta_title'        => $request->meta_title,
            'small_description' => $request->small_description,
        ]);

        $story->save();

        foreach ($request->file('images') as $index => $image) {
            $ext = $image->getClientOriginalExtension();
            $fileName = time() . '_' . $index . '.' . $ext;
            $image->move('upload/story', $fileName);

            // Gunakan $story->id yang sudah tersimpan untuk story_id pada Slide
            Slide::create([
                'story_id'      => $story->id,
                'image_path'    => 'upload/story/' . $fileName,
                'description'   => $request->descriptions[$index],
            ]);
        }
        return redirect()->route('story')->with('success', 'Story Added Successfully');
    }

    public function edit($id)
    {
        $story = Story::with('slides')->findOrFail($id);
        $categories = Category::all();
        return view('admin.story.edit', compact('story', 'categories'));
    }

    public function update(StoryRequest $request, $id)
    {
        $story = Story::findOrFail($id);

        $story->update([
            'title'         => $request->title,
            'category_id'   => $request->category_id,
            'level_id'      => $request->level_id,
            'trending'      => $request->trending ? 1 : 0,
        ]);

        // Periksa apakah ada input file images
        if ($request->hasFile('images')) {
            // Hapus slides lama yang ada gambar baru
            Slide::where('story_id', $story->id)->delete();

            foreach ($request->file('images') as $index => $image) {
                $ext = $image->getClientOriginalExtension();
                $fileName = time() . '_' . $index . '.' . $ext;
                $image->move('upload/story', $fileName);

                Slide::create([
                    'story_id'      => $story->id,
                    'image_path'    => 'upload/story/' . $fileName,
                    'description'   => $request->descriptions[$index],
                ]);
            }
        } else {
            // Update hanya deskripsi slide
            foreach ($request->descriptions as $index => $description) {
                $story->slides[$index]->update([
                    'description' => $description,
                ]);
            }
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

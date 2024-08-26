<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoryRequest;
use App\Models\Category;
use App\Models\Level;
use App\Models\Slide;
use App\Models\Story;
use Illuminate\Support\Str;
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
        $validatedData = $request->validated();

        // Generate slug
        $validatedData['slug'] = Str::slug($validatedData['slug']);

        // Simpan data Story
        $story = new Story($validatedData);

        // Atur nilai trending menggunakan operator ternary
        $story->trending = $request->has('trending') ? true : false;

        // Handle file upload for image_cover
        if ($request->hasFile('image_cover')) {
            $coverImage     = $request->file('image_cover');
            $ext            = $coverImage->getClientOriginalExtension();
            $coverFileName  = time() . '_cover.' . $ext;
            $coverImage->move('upload/story-cover', $coverFileName);

            // Simpan path image_cover ke dalam $story
            $story->image_cover = 'upload/story-cover/' . $coverFileName;
        }
        $story->save();

        foreach ($request->file('images') as $index => $image) {
            $ext        = $image->getClientOriginalExtension();
            $fileName   = time() . '_' . $index . '.' . $ext;
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
        $story      = Story::with('slides')->findOrFail($id);
        $categories = Category::all();
        $levels     = Level::all();
        return view('admin.story.edit', compact('story', 'categories', 'levels'));
    }

    public function update(StoryRequest $request, $id)
    {
        $story = Story::find($id);

        // Validasi data dari request
        $validatedData = $request->validated();

        if (!$story) {
            return redirect()->route('story')->with('error', 'Story not found');
        }

        // Update attributes
        $story->title = $validatedData['title'];
        $story->category_id = $validatedData['category_id'];
        $story->level_id = $validatedData['level_id'];
        $story->trending = $request->has('trending') ? 1 : 0;
        $story->author = $validatedData['author'];
        $story->slug = Str::slug($validatedData['slug']);
        $story->meta_title = $validatedData['meta_title'];
        $story->small_description = $validatedData['small_description'];
        $story->save();

        // Handle file upload for image_cover
        if ($request->hasFile('image_cover')) {
            if (file_exists(public_path($story->image_cover))) {
                unlink(public_path($story->image_cover));
            }

            $coverImage = $request->file('image_cover');
            $coverFileName = time() . '_cover.' . $coverImage->getClientOriginalExtension();
            $coverImage->move('upload/story-cover', $coverFileName);
            $story->update(['image_cover' => 'upload/story-cover/' . $coverFileName]);
        }

        // Handle slide images
        if ($request->hasFile('images')) {
            Slide::where('story_id', $story->id)->delete();

            foreach ($request->file('images') as $index => $image) {
                $fileName = time() . '_' . $index . '.' . $image->getClientOriginalExtension();
                $image->move('upload/story', $fileName);

                Slide::create([
                    'story_id'    => $story->id,
                    'image_path'  => 'upload/story/' . $fileName,
                    'description' => $request->descriptions[$index],
                ]);
            }
        } else {
            foreach ($request->descriptions as $index => $description) {
                if (isset($story->slides[$index])) {
                    $story->slides[$index]->update([
                        'description' => $description,
                    ]);
                }
            }
        }

        return redirect()->route('story')->with('success', 'Story Updated Successfully');
    }


    public function delete($id)
    {
        $story = Story::findOrFail($id);

        // Hapus image_cover dari folder
        if (file_exists(public_path($story->image_cover))) {
            unlink(public_path($story->image_cover));
        }

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

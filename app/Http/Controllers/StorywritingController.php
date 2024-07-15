<?php

namespace App\Http\Controllers;

use App\Models\Storywriting;
use App\Http\Requests\StoreStorywritingRequest;
use App\Http\Requests\UpdateStorywritingRequest;
use App\Models\Category;
use App\Models\story;
use App\Models\Storydetails;
use App\Models\User;
use Illuminate\Http\Request;

class StorywritingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $storywriting = Storywriting::all();
        $data = compact('storywriting');
        return view('frontend.writing2', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        // $categories = Category::all();
        // $storydetails = Storydetails::with('category')->get();
        // return view('frontend.storywriting', compact('storydetails','categories'));
        return view('frontend.storywriting');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'slug' => 'nullable|string|max:255',
            'user_id' => 'nullable|exists:users,id',
            'category_id' => 'nullable|exists:categories,id',
            'stroydetails_id' => 'nullable|exists:storydetails,id',

        ]);

        $user_id = Auth()->user()->id;

        $storywriting = new Storywriting();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storywriting'), $imageName);
            $storywriting->image = $imageName;
        } 
        else {
            $imageName = null;
        }
        $storywriting->title = $request->title;
        $storywriting->description = $request->description;
        $storywriting->user_id = $user_id;
        $storywriting->category_id = $request->category_id;
        $storywriting->stortydetails_id = $request->stortydetails_id;
        $storywriting->save();

        return redirect()->route('storywriting.index')->with($storywriting->title);
    }

    /**
     * Display the specified resource.
     */
    public function show(Storywriting $storywriting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Storywriting $storywriting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStorywritingRequest $request, Storywriting $storywriting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Storywriting $storywriting)
    {
    }
}

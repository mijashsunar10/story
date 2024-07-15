<?php

namespace App\Http\Controllers;

use App\Models\Storydetails;
use App\Http\Requests\StoreStorydetailsRequest;
use App\Http\Requests\UpdateStorydetailsRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StorydetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $storydetails = Storydetails::all();
        $data = compact('storydetails');
        return view('frontend.storywriting', $data);    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('frontend.storydetails');
    }

    public function store(Request $request)
{
    // Validate the incoming request
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'main_characters' => 'nullable|string',
        'author' => 'required|string|max:255',
        'category_id' => 'nullable|exists:categories,id',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust as needed
        'audience' => 'required|in:child,young,adult',
        'language' => 'required|string',
        'copyright' => 'required|in:All_rights_reserved,Public_Domain',
    ]);

    // Retrieve the currently authenticated user's ID
    $user_id = Auth()->user()->id;
    // Create a new Storydetails instance and assign values
    $storydetails = new Storydetails();

   
// dd($user_id);
    // Handle file upload if there's an image
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads'), $imageName);
        $storydetails->image= $imageName;
    } 
    else {  
        $imageName = null;
    }

    $storydetails->title = $request->title;
    $storydetails->description = $request->description;
    $storydetails->main_characters = $request->main_characters;
    $storydetails->author = $request->author;
    $storydetails->category_id = $request->category_id;
    $storydetails->image = $imageName;
    $storydetails->user_id = $user_id;
    $storydetails->audience = $request->audience;
    $storydetails->language = $request->language;
    $storydetails->copyright = $request->copyright;

    // Save the storydetails instance
    $storydetails->save();

    // Redirect to a specific route or action after storing
    return redirect()->route('storydetails.index')->with($storydetails->title);
}
    /**
   
     * Display the specified resource.
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Storydetails $storydetails)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStorydetailsRequest $request, Storydetails $storydetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Storydetails $storydetails)
    {
        
    }
}

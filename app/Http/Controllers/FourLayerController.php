<?php

namespace App\Http\Controllers;

use App\Models\FourLayer;
use App\Http\Requests\StoreFourLayerRequest;
use App\Http\Requests\UpdateFourLayerRequest;
use App\Models\Category;
use App\Models\Storydetails;

class FourLayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();    
        // Fetch all story details with their categories
        $storydetails = Storydetails::with('category')->get();
        return view('frontend.fourlayer', compact('storydetails', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFourLayerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function showByCategory($categoryId)
    {
        // Fetch stories belonging to a specific category
        $storydetails = Storydetails::with('category')->where('category_id', $categoryId)->get();

        // Fetch all categories to display them as filters
        $categories = Category::all();

        return view('frontend.fourlayer', compact('storydetails', 'categories'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FourLayer $fourLayer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFourLayerRequest $request, FourLayer $fourLayer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FourLayer $fourLayer)
    {
        //
    }
}
// <div>
//         @foreach ($categories as $category)
//             <h2>{{ $category->name }}</h2>
//             <p>{{ $category->description }}</p>
//             <div>
//                 @forelse ($category->storyDetails as $story)
//                     <div>
//                         <h3>{{ $story->title }}</h3>
//                         <p>{{ $story->description }}</p>
//                         <p><strong>Author:</strong> {{ $story->author }}</p>
//                         <p><strong>Main Characters:</strong> {{ $story->main_characters }}</p>
//                         <p><strong>Audience:</strong> {{ $story->audience }}</p>
//                         <p><strong>Language:</strong> {{ $story->language }}</p>
//                         <p><strong>Copyright:</strong> {{ $story->copyright }}</p>
//                         @if($story->image)
//                             <img src="{{ asset('uploads/' . $story->image) }}" alt="{{ $story->title }}">
//                         @endif
//                     </div>
//                 @empty
//                     <p>No stories available in this category.</p>
//                 @endforelse
//             </div>
//         @endforeach
//     </div>
<?php

namespace App\Http\Controllers;

use App\Models\Storydetails;
use App\Http\Requests\StoreStorydetailsRequest;
use App\Http\Requests\UpdateStorydetailsRequest;
use App\Models\Category;
use Illuminate\Http\Request;


class StorydetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $storydetails = Storydetails::all();
        $data = compact('storydetails');
        return view('frontend.index', $data);

        //Fetch all the categories and display them as filters
        // $categories = Category::all();
        // $storydetails = Storydetails::with('category')->get();
        // return View('frontend.fourlayer',compact());
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('frontend.storydetails');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    //  dd($request);



         $storydetails = new Storydetails;
         $storydetails->title =$request->title;
         $storydetails->description =$request->description;
         $storydetails->main_characters =$request->main_characters;
         $storydetails->author =$request->author;
         $storydetails->category_id=$request->category_id;
        //  $storydetails->category=$request->category;
         
         if ($request->hasFile('image')) {
             $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $storydetails->image= $imageName;
        }

        
        $storydetails->user_id=$request->user_id;
        $storydetails->audience=$request->audience;
        $storydetails->language=$request->language;
        $storydetails->copyright=$request->copyright;
        
        $storydetails->save();
        return redirect()->route('storydetails.index');      
        //image..
        //image
       //  $storydetails->title =$request->title;
    
       // $name=strtolower(str_replace(" ","",$request->title)."-".time().".".$request->image->extension());
       // $request->image->move(public_path('uploads',$name));
       // $storydetails->image = $name;
    }
    
    /**
   
     * Display the specified resource.
     */
    public function show($id)
    {
        // $storydetails = Storydetails::with('Category')->findOrFail($id);
        // return view('frontend.fourlayer', compact('storydetails'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Storydetails $storydetails)
    {
        //
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
        //
    }
}

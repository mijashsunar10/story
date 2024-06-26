<?php

namespace App\Http\Controllers;

use App\Models\Storydetails;
use App\Http\Requests\StoreStorydetailsRequest;
use App\Http\Requests\UpdateStorydetailsRequest;

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
    public function store(StoreStorydetailsRequest $request)
    {
        $request->validate(
            [
                'title' =>'required|string|max:255',
                'description' =>'nullable|string',
                'main_characters' =>'nullable|string',
                'author' =>'required|string|max:255',
                // 'category_id' => 'required|exists:categories|id',
                'category_id' => 'nullable|exists:categories|id',
                // 'user_id'=> 'required|exists:users|id',
                'user_id'=> 'nullable|exists:users|id',
                // 'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
                'image' => 'nullable|string',
                'audience' => 'required|in:child,young,adult',
                'language' => 'required|string|max:255',
                'copyright'=>'required|in:All_rights_reserved,Public_Domain'
            ]
            );



        $storydetails = new Storydetails;
         $storydetails->title =$request->title;
         $storydetails->description =$request->descritpion;
         $storydetails->main_characters =$request->main_characters;
         $storydetails->author =$request->author;
         $storydetails->category_id=$request->category_id;
         //image
        //  $storydetails->title =$request->title;

        // $name=strtolower(str_replace(" ","",$request->title)."-".time().".".$request->image->extension());
        // $request->image->move(public_path('uploads',$name));
        // $storydetails->image = $name;
        
        //image..
        $storydetails->user_id=$request->user_id;
        $storydetails->audience=$request->audience;
        $storydetails->language=$request->language;
        $storydetails->copyright=$request->copyright;

        $storydetails->save();
        return redirect('forntend.index');      
    }
    
    /**
   
     * Display the specified resource.
     */
    public function show(Storydetails $storydetails)
    {
        //
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

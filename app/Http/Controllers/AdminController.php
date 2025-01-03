<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Recipe;
use App\Models\Review;
use Alert;

class AdminController extends Controller
{
    

    /*public function aboutus(){
        return view('home.about');
    }*/

    public function homepage(){

        $recipe = Recipe::all();
        $reviews = Review::all();
        return view('home.homepage',compact('recipe','reviews'));
    }

    public function recipe_details($id){

        $recipe = Recipe::find($id);
        return view('home.recipe_details',compact('recipe'));
    }

    public function user_add(){
        return view('home.user_add');
    }

    public function user_recipe(Request $request){
        $user=Auth()->user();

        if($user){
            $uploader_id = $user->id;
            $name = $user->name;
            $uploadertype = $user->usertype;
            
            $recipe=new Recipe;

            $recipe->title = $request->title;
            $recipe->ingredients = $request->ingredients;
            $recipe->details = $request->details;
            $recipe->uploader_id = $uploader_id;
            $recipe->name = $name;
            $recipe->uploadertype = $uploadertype;

            // image er kahini suru
            $image=$request->image;

            if($image){
                $imagename=time().'.'.$image->getClientOriginalExtension();
                $request->image->move('recipeimage',$imagename);
                $recipe->image = $imagename;
            }
            //image er kahini ses...

            $recipe->save();

            Alert::success('You have successfully added your recipe!');
            return redirect()->back();
        }
        else{
            return redirect()->route('login')->with('error', 'You must be logged in to upload a recipe.');
        }

    }

    public function my_recipe(){

        $user = Auth::user();
        $userid= $user->id;

        $data = Recipe::where('uploader_id','=',$userid)->get();
        return view('home.my_recipe', compact('data'));
    }

    public function rec_del($id){

        $data = Recipe::find($id);
        $data->delete();
        Alert::success('You have successfully deleted your recipe!');
        return redirect()->back();
    }

    public function rec_update($id){

        $data = Recipe::find($id);
        return view('home.rec_update',compact('data'));
    }

    public function update_recipe(Request $request,$id){
        $data = Recipe::find($id);

        $data->title = $request->title;
        $data->ingredients= $request->ingredients;
        $data->details= $request->details;

        $image=$request->image;
        if($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('recipeimage',$imagename);
            $data->image = $imagename;
        }

        $data->save();
        
        return redirect()->back()->with('message','Recipe Updated Successfully.');
    }

    

    public function review() {
         // Example: Fetching data from a model
        return view('home.review');
    }

    public function store(Request $request)
    {
        // Ensure user is authenticated
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'You need to log in to submit a review.');
        }

        // Proceed to save the review
        $request->validate([
            'review' => 'required|string|max:1000',
        ]);

        $review = new Review();
        $review->user_id = auth()->id(); // This will now safely get the authenticated user's ID
        $review->name = auth()->user()->name;
        $review->review = $request->review;
        $review->save();

        return redirect()->back()->with('success', 'Thank you for your feedback!');
    }



}

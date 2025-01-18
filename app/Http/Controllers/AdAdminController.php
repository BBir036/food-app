<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Recipe;
use Illuminate\Support\Facades\Auth;
use App\Models\Review;

class AdAdminController extends Controller
{
    public function recipe_page(){
        return view('admin.recipe_page');
    }

    public function add_recipe(Request $request){
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
            return redirect()->back()->with('message','Recipe Added Successfully');
        }
        else{
            return redirect()->route('login')->with('error', 'You must be logged in to upload a recipe.');
        }

        
    }

    public function recipe_data(){

        $recipe = Recipe::all();

        return view('admin.recipe_data',compact('recipe'));
    }

    public function delete_recipe($id){
        $recipe = Recipe::find($id);

        $recipe->delete();
        return redirect()->back()->with('message','Recipe Deleted Successfully.');
    }

    public function edit_recipe($id){

        $recipe = Recipe::find($id);
        return view('admin.edit_recipe',compact('recipe'));
    }

    public function editrecipe(Request $request,$id){
        $data = Recipe::find($id);

        $data->title=$request->title;
        $data->ingredients=$request->ingredients;
        $data->details=$request->details;

        $image=$request->image;
        if($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('recipeimage',$imagename);
            $data->image = $imagename;
        }

        $data->save();
        return redirect()->back()->with('message','Recipe Updated Successfully.');
    }

    public function dashboard(){

        $reviews = Review::latest()->take(2)->get();
        return view('admin.index',compact('reviews'));
    }
    

}



<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Recipe;
use App\Models\Review;
use Alert;


class PageController extends Controller
{



    public function index()
    {
        // Check if the user is logged in
        if (Auth::check()) {
            $recipe = Recipe::all();
            $reviews = Review::all();

            $usertype = Auth::user()->usertype; // Retrieve the user type of the logged-in user

            if ($usertype == 'user') {
                return view('home.homepage', compact('recipe','reviews')); // Show homepage to regular users
            } else if ($usertype == 'admin') {
                return view('admin.index'); // Show admin dashboard to admins
            } else {
                return redirect()->back()->with('error', 'Unauthorized access');
            }
        }

        // For guests, show a default view (e.g., a generic homepage or a login page)
        $recipe = Recipe::all(); // Fetch recipes to show on the guest homepage
        return view('home.homepage', compact('recipe','reviews'));
    }


    public function recipes()
    {
        $recipes = Recipe::all(); // Fetch all recipes from the database
        return view('home.recipes', compact('recipes'));
    }

    public function about()
    {
        return view('home.about'); // Adjust the path based on your folder structure
    }

    public function videoTutorials()
    {
        return view('home.videoTutorials'); // Adjust the path based on your folder structure
    }
}

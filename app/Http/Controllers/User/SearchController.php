<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Http\Requests;

class SearchController extends Controller
{
    public function filter(Request $request, Category $category)
    {

        $searchterm = Input::get('searchinput');

        if ($searchterm){

            $categories = DB::table('categories');
            $results = $categories->where('name', 'LIKE', '%'. $searchterm .'%')->get();

            return view('search')->with('products', $results);

        }

        // Needs more to work
        // $category = $category->newQuery();

        // Search for a category based on their name.
        // if ($request->has('name')) {
            // return $category->where('name', $request->input('name'))->get();
        // }

        // return $category->get();
    }
}

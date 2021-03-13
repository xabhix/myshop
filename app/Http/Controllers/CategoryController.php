<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
class CategoryController extends Controller
{
    //
    public function addcategory(Request $request){
        $category = new category();
        $category->name=$request->input('category');
        $category->save();
        return redirect()->back();
    }

    public function itemcategory(){
        return view('itemcategory');
    } 

    public function fetchCategories(){
        $categories = category::all();
        return response()->json($categories);
    } 


}

<?php

namespace App\Http\Controllers;

use App\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index(){
        $categories = Category::all();

    	return view('categories.index',compact('categories'));
    }
    function create(){
        return view('categories.create');
    }
    function store(Request $request){

        $category=new Category();
        $category->title=$request->title;
        $category->save();

        return redirect('/category');
    }
    function show($id){
    	return view('categories.show',compact('id'));
    }
    function edit($id){
    	return view('categories.edit',compact('id'));
    }
}

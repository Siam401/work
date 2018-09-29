<?php

namespace App\Http\Controllers;

use App\Category;

use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    function index(){
        $categories = Category::paginate(5);

    	return view('categories.index',compact('categories'));
    }
    function create(){
        return view('categories.create');
    }
    function store(CategoryRequest $request){

        // $category=new Category();
        // $category->title=$request->title;
        // $category->save();

//        $request->validate([
//            'title' => 'required'
//        ]);

        Category::create($request->all());
        Session::flash('message','Category created succesfull');
        return redirect('/category');
    }
    function show($id){
        $category=Category::findOrFail($id);

    	return view('categories.show',compact('category'));
    }
    function edit($id){
        $category=Category::findOrFail($id);

    	return view('categories.edit',compact('category'));
    }
    function update(CategoryRequest $request,$id){
            $category=Category::findOrFail($id);
            $category->update($request->all());
        Session::flash('message','Upadated succesfull');
        return redirect('/category');
    }

    function destroy($id){
        Category::destroy($id);
        Session::flash('message','Deleted succesfull');

//        $category=Category::findOrFail($id);
//        $category->delete;

        return redirect('/category');
    }
}

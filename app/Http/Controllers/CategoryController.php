<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index(){
        $categories = Category :: all();
        dd($categories);
    	return view('categories.index');
    }
    function store(){
    	return view('categories.store');
    }
    function show($id){
    	return view('categories.show',compact('id'));
    }
    function edit($id){
    	return view('categories.edit',compact('id'));
    }
}

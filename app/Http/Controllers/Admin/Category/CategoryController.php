<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view("backend/categories/category");
       
    }
    public function create(){
        return view("backend/categories/addcategory");
    }
    public function store(){
        return view("backend/categories/addcategory");
    }
    public function edit(){
        return view("backend/categories/editcategory");
    }
    public function update(){
        return view("backend/categories/updatecategory");
    }
    public function delete(){
        return "delete";
    }
}

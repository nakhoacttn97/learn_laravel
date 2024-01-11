<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller{
    function index(){
        $arr = Category::all();
        $v = view('category.index', ['arr' => $arr]);
        return $v;
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\Request;
use App\Models\Category;

class PublicController extends Controller
{
    public function home() {
        $dishes = Dish::all();
        $categories = Category::all();
        return view('welcome', compact('dishes', 'categories'));
    }
}

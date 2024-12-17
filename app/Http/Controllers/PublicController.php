<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home() {
        $dishes = Dish::all();
        return view('welcome', compact('dishes'));
    }
}

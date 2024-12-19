<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dish.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'tag' => 'required',
            'allergeni' => 'required',
        ]);

        $dish = Dish::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'tag' => $request->tag,
            'allergeni' => $request->allergeni,
            'user_id' => Auth::user()->id,
        ]);

        $choosenCategories =  $request->categories;
        $dish->categories()->attach($choosenCategories);

        return redirect(route('welcome'));
    }

    public function dishSearch(Request $request)
    {
        $query = $request->input('query');
        $dishes = Dish::search($query)->orderBy('created_at', 'desc')->get();
        return view('dish.search-index', compact('dishes', 'query'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Dish $dish)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dish $dish)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dish $dish)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dish $dish)
    {
        //
    }
}

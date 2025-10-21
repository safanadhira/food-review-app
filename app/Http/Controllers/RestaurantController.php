<?php

namespace App\Http\Controllers;
use App\Models\Restaurant;
use App\Models\Food;

use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $restaurants = Restaurant::all();
        return view('restaurants.index', compact('restaurants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('restaurants.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:restaurants,name',
            'description' => 'nullable|string',
        ]);

        Restaurant::create($request->only(['name', 'description']));

        return redirect()->route('restaurants.index')->with('success', 'Restaurant added!');
    }

    /**
     * Display the specified resource.
     */
    public function show($name)
    {
        $restaurant = Restaurant::where('name', $name)->firstOrFail();
        $foods = Food::where('restaurant_name', $name)->orderBy('name')->get();

        return view('restaurants.show', compact('restaurant', 'foods'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

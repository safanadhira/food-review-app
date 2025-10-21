<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request; 
use App\Models\Restaurant;

class FoodController extends Controller 
{
    public function index()
    {
        $foods = Food::all();
        return view('foods.index', compact('foods'));
    }

    public function create()
    {
        $restaurants = \App\Models\Restaurant::all();
        return view('foods.create', compact('restaurants'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'restaurant_name' => 'required|string',
        ]);

        $restaurant = Restaurant::firstOrCreate(['name' => $request->restaurant_name]);

        if (! $restaurant) {
            return back()->withErrors(['restaurant_name' => 'Restaurant not found.'])->withInput();
        }

        Food::create([
            'name' => $request->name,
            'price' => $request->price,
            'restaurant_id' => $restaurant->id,
            'description' => $request->description,
        ]);

        return redirect()->route('foods.index')->with('success', 'Food added!');
    }


    public function edit(Food $food)
    {
        $restaurants = \App\Models\Restaurant::all();
        return view('foods.edit', compact('food', 'restaurants'));
    }

    public function update(Request $request, Food $food)
    {
        $request->validate([
            'name' => 'required|string',
            'price' => 'nullable|numeric',
            'description' => 'nullable|string',
            'restaurant_name' => 'required|string',
        ]);

        $restaurant = Restaurant::firstOrCreate(['name' => $request->restaurant_name]);

        if (! $restaurant) {
            return back()->withErrors(['restaurant_name' => 'Restaurant not found.'])->withInput();
        }

        $food->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'restaurant_id' => $restaurant->id,
        ]);

        return redirect()->route('foods.index')->with('success', 'Food updated!');
    }

    public function destroy(Food $food)
    {
        $food->delete();
        return redirect()->route('foods.index');
    }
}
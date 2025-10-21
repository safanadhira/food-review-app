<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Review;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Food $food)
    {
        $reviews = $food->reviews()->latest()->get();
        return view('reviews.index', compact('food', 'reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Food $food)
    {
        return view('reviews.create', compact('food'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'food_id' => 'required|exists:foods,id',
            'reviewer_name' => 'required|string|max:255',
            'comment' => 'nullable|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        Review::create([
            'food_id' => $request->input('food_id'),
            'reviewer_name' => $request->input('reviewer_name'),
            'comment' => $request->input('comment'),
            'rating' => $request->input('rating'),
        ]);

        $food = Food::find($request->food_id);

        return redirect()->route('reviews.index', ['food' => $request->food_id])
                        ->with('success', 'Review submitted!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function destroy(Review $review)
    {
        $food = $review->food; // ambil makanan biar bisa redirect balik
        $review->delete();

        return redirect()->route('reviews.index', ['food' => $food->id])
                        ->with('success', 'Review deleted!');
    }

}

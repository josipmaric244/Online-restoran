<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //dohvacanje svih modela tog tipa
    //npr /foods
    public function index()
    {
        return Food::get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $food = Food::create(['type' => $request->type, 'year' => $request->year, 'food_model' => $request->food_model, 'user_id' => $request->user_id]);

        return $food;
    }
    //kreiranje modela, POST na /foods

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function show(Food $food)
    {
        return $food;

    }

    //dohvacanje pojedinacnih foods
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Food $food)
    {
        $food = Food::create(['type' => $request->type, 'year' => $request->year, 'food_model' => $request->food_model, 'user_id' => $request->user_id]);

        return $food;
    }

    //
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function destroy(Food $food)
    {
        return $food->delete();

    }
}

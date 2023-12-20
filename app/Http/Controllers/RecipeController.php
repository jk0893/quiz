<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Cereal;
use App\Models\Meat;
use App\Models\Herb;
use App\Models\Vegetable;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::paginate(12);
        return view("index", compact('recipes'));
    }

    public function create()
    {
        $meats = Meat::all();
        $cereals = Cereal::all();
        $herbs = Herb::all();
        $vegetables = Vegetable::all();
        return view("create", compact("meats", "cereals", "herbs", "vegetables"));
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            "meat_id" => "integer",
            "cereal_id" => "integer",
            "herb_id" => "integer",
            "vegetable_id" => "integer",
        ]);
        $recipe = Recipe::create($data);
        return redirect()->route("recipe.show", $recipe->id);
    }

    public function show(Recipe $recipe){
        return view('show', compact('recipe'));
    }
}

<?php

namespace App\Http\Controllers;
use App\Meal;
use App\MealTranslation;
use App\Category;
use App\CategoryTranslation;
use App\Ingredient;
use App\IngredientTranslation;
use App\Tag;
use App\TagTranslation;
use App\Language;
use App\Services\createSlug;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meals = new Meal;

        if (request()->has('lang')){
            $meals = $meals->where('lang', request('lang'));
        }
        if (request()->has('category')){
            $meals = $meals->where('category', request('category'));
        }

        $meals = $meals->paginate(5)->appends([
            'lang' => request('lang'),
            'category' => request('category'),
        ]);
    
        return view ('pages.home', compact('meals'))
                    ->with('cats',Category::get())
                    ->with('langs',Language::get());   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */  
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

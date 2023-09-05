<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=category::all();
        return view('categories.index',compact('categories'));

        $categories = DB::table('categories')->get();
        return $categories;

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        $category=new party();
        $category->name=$request->name;
        $category->save();
        return response('تم اضافة البيانات بنجاح');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('categories')->insert(['name' => $request->name]);
        return response('Done');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $categories=category::get()->where('id',$id)->first();
        return $categories;

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

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $data['category'] = Category::all();
        return view('category/category', $data);
    }

    public function create()
    {

        $data['category'] = Category::all();

        return view('category/add', $data);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required'
        ]);

        Category::create([
            'name' => $validated['name']
        ]);

        return redirect('/category');
    }

    public function edit($id)
    {
        $data['category'] = Category::all()->first();
        return view('/category/edit', $data);
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
        $validated = $request->validate([
            'name' => 'required'
        ]);

        Category::where('id', $id)->update([
            'name' => $validated['name']
        ]);

        return redirect('/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::destroy($id);
        return redirect('/category');
    }
}

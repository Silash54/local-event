<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Category::OrderBy('created_at','DESC')->get();
        return view('backend.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */

public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:50',
        'description' => 'required|min:10',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Get validated data
    $validated = $validator->validated();

    Category::create($validated);

    return redirect()->route('categories.index')->with('success', 'Category created successfully.');
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
        $categories=Category::find($id);
        return view('backend.category.edit',compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
    // Validate request data
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:50',
        'description' => 'required|min:10',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Get validated data
    $validated = $validator->validated();

    // Find the category
    $category = Category::findOrFail($id);

    // Update fields
    $category->update($validated);


    return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category=Category::find($id);
        $category->delete();
    return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');

    }
}

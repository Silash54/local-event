<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carousel = Carousel::OrderBy('title', 'DESC')->get();
        return view('backend.carousel.index', [
            'carousels' => $carousel
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.carousel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = Validator::make(
            $request->all(),
            [
                'image' => 'required|',
            ]
        );
        if ($validate->fails()) {
            return response()->json([
                'status' => true,
                'message' => $validate->errors()
            ]);
        }
        $carousel = new Carousel();
        $carousel->title = $request->title;
        if ($request->has('image')) {
            $file = $request->image;
            $newName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images', $newName);
            $carousel->image = "images/$newName";
        }
        $carousel->save();
        return redirect()->route('carousel.index');
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
        $carousel = Carousel::find($id);
        return view('backend.carousel.edit', compact('carousel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $validate = Validator::make(
        //     $request->all(),
        //     [
        //         'image' => 'required|'
        //     ]
        // );
        // if ($validate->fails()) {
        //     return response()->json([
        //         'status' => true,
        //         'message' => $validate->errors()
        //     ]);
        // }
        $carousel = Carousel::find($id);
        $carousel->title = $request->title;
        if ($request->has('image')) {
            $file = $request->image;
            $newName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images', $newName);
            $carousel->image = "images/$newName";
        }
        $carousel->update();
        return redirect()->route('carousel.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $carousel = Carousel::find($id);
        $carousel->delete();
        return redirect()->route('carousel.index');
    }
}

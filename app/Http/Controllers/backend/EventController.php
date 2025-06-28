<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::OrderBy('created_at', 'DESC')->get();
        return view('backend.Event.index', [
            'events' => $events
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.Event.create', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        //return $request;
        $validate = Validator::make($request->all(), [
            'title' => 'required|max:30',
            'description' => 'required|max:256',
            'date_location' => 'required|string|max:255',
            'price' => 'nullable|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // 2MB max
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }

        $validatedData = $validate->validated();

        $event = new Event();
        $event->title = $validatedData['title'];
        $event->description = $validatedData['description'];
        $event->date_location = $validatedData['date_location'];
        $event->price = $validatedData['price'] ?? null;
        $event->category_id = $validatedData['category_id'];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $newName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images', $newName);
            $event->image = "images/$newName";
        }

        $event->save();

        return redirect()->route('event.index')->with('success', 'Event created successfully.');
    }


/**
 * Display the specified resource.
 */
function show(string $id)
{
    //
}

/**
 * Show the form for editing the specified resource.
 */
public function edit(string $id)
{
    $event=Event::find($id);
    $categories=Category::all();
    return view('backend.Event.edit',compact('event','categories'));
}

/**
 * Update the specified resource in storage.
 */
public function update(Request $request, string $id)
{
    //return $request;
     $validate = Validator::make($request->all(), [
            'title' => 'required|max:30',
            'description' => 'required|max:256',
            'date_location' => 'required|string|max:255',
            'price' => 'nullable|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // 2MB max
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }

    $event = Event::find($id);
        $event->title = $request->title;
        $event->description = $request->description;
        $event->date_location = $request->date_location;
        $event->price = $request->price;
        $event->category_id = $request->category_id;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $newName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images', $newName);
            $event->image = "images/$newName";
        }

        $event->save();
        return redirect()->route('event.index')->with('success', 'Event created successfully.');

}

/**
 * Remove the specified resource from storage.
 */
public function destroy(string $id)
{
    $event=Event::find($id);
    $event->delete();
    return redirect()->route('event.index')->with('success','Event delete successfully');
}
}
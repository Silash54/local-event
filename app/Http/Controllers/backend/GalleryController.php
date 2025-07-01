<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries=Gallery::OrderBy('created_at','ASC')->take(10)->get();
        return view('backend.gallery.index',
    [
        'galleries'=>$galleries
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $events=Event::all();
        return view('backend.gallery.create',compact('events'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return $request;
        $validateData=Validator::make($request->all(),[
            'image'=>'required',
            'caption'=>'required',
            'event_id'=>'required'
        ]);
        if($validateData->fails())
        {
            return response()->json([
                'status'=>false,
                'message'=>$validateData->errors()
            ]);
        }
        $gallery=new Gallery();
        $gallery->caption=$request->caption;
        $gallery->event_id=$request->event_id;
        if($request->has('image'))
        {
            $file = $request->image;
            $newName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images', $newName);
            $gallery->image = "images/$newName";
        }
        $gallery->save();
        return redirect()->route('gallery.index')->with('success','Record save successfully');
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
        $gallery=Gallery::find($id);
        return view('backend.gallery.edit',compact('gallery'));
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
        $gallery=Gallery::find($id);
        $gallery->delete();
        return redirect()->route('gallery.index')->with('success','Gallery Record Delete Successfully');
    }
}

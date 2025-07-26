<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $company=company::first();
        return view('backend.company.index',compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate=Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required|email',
            'telephone'=>'required|numeric',
            'address'=>'required|',
            'facebook'=>'required|url',
            'twitter'=>'required',
            'tiktok'=>'required',
        ]);
        if($validate->fails())
        {
            return response()->json([
                'status'=>false,
                'message'=>$validate->errors()
            ]);
        }
        $createCompany=company::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
            'telephone'=>$request->telephone,
            'facebook'=>$request->facebook,
            'twitter'=>$request->twitter,
            'tiktok'=>$request->tiktok,
        ]);
        return redirect()->route('company.index')->with('success','New Company created successfully');
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
    public function destroy(string $id)
    {
        //
    }
}

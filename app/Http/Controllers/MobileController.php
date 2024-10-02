<?php

namespace App\Http\Controllers;

use App\Models\Mobile;
use App\Http\Requests\StoreMobileRequest;
use App\Http\Requests\UpdateMobileRequest;

class MobileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mobiles = Mobile::all();
        return view('mobiles.index',compact('mobiles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mobiles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMobileRequest $request)
    {
        Mobile::create($request->all());
        Mobile::create([
            'name' => $request->name,
            'brand' => $request->brand,
            'description' => $request->description,
            'price' => $request->price,
        ]);
        return redirect()->route('mobiles.index')->with('success','Mobile created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mobile $mobile)
    {
        return view('mobiles.show',compact('mobile'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mobile $mobile)
    {
        return view('mobiles.edit',compact('mobile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMobileRequest $request, Mobile $mobile)
    {
        $mobile->update($request->all());

        return redirect()->route('mobiles.index')->with('success','Mobile updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mobile $mobile)
    {
        $mobile->delete();
        return redirect()->route('mobiles.index');
    }
}

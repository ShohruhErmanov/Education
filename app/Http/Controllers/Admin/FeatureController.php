<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feature;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $features = Feature::all();
        return view('admin.feature.index', compact('features'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.feature.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'text' => 'required',
            'icon' => 'required',
            'bg' => 'required',
         ]);


         Feature::create($request->all());
         return redirect()->route('admin.feature.index')->with('seccess', 'Feature created saccessfuly');

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
    public function edit(Feature $feature)
    {
        return view('admin.feature.edit', compact('feature'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Feature $feature)
    {
        $this->validate($request, [
            'title' => 'required',
            'text' => 'required',
            'icon' => 'required',
            'bg' => 'required',
         ]);

         $feature->update($request->all());
         return redirect()->route('admin.feature.index')->with('seccess', 'Feature updated saccessfuly');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feature $feature)
    {
        $feature->delete();
        return redirect()->route('admin.feature.index')->with('seccess', 'Feature deleted saccessfuly');

    }
}

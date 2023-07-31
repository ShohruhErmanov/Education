<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Featureimg;

class FeatureimgController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $featureimgs = Featureimg::all();
        return view('admin.featureimg.index', compact('featureimgs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.featureimg.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/feature', $image_name);
            $requestData['image'] = $image_name;
        }

        Featureimg::create($requestData);
        return redirect()->route('admin.featureimg.index')->with('seccess', 'Feature Img created successfuly');
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
    public function edit(Featureimg $featureimg)
    {
        return view('admin.featureimg.edit', compact('featureimg'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Featureimg $featureimg)
    {
        $requestData = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/feature', $image_name);
            $requestData['image'] = $image_name;
        }

        $featureimg->update($requestData);
        return redirect()->route('admin.featureimg.index')->with('seccess', 'Feature Img updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Featureimg $featureimg)
    {
        $featureimg->delete();
        return redirect()->route('admin.featureimg.index')->with('seccess', 'Feature Img deleted successfuly');
    }
}

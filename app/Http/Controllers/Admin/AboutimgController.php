<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aboutimg;

class AboutimgController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutimgs = Aboutimg::all();
        return view('admin.aboutimg.index', compact('aboutimgs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.aboutimg.create');
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
            $file->move('images/about', $image_name);
            $requestData['image'] = $image_name;
        }

        Aboutimg::create($requestData);
        return redirect()->route('admin.aboutimg.index')->with('seccess', 'About Img created successfuly');
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
    public function edit(Aboutimg $aboutimg)
    {
        return view('admin.aboutimg.edit', compact('aboutimg'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Aboutimg $aboutimg)
    {
        $requestData = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/about', $image_name);
            $requestData['image'] = $image_name;
        }

        $aboutimg->update($requestData);
        return redirect()->route('admin.aboutimg.index')->with('seccess', 'About Img updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aboutimg $aboutimg)
    {
        $aboutimg->delete();
        return redirect()->route('admin.aboutimg.index')->with('seccess', 'About Img deleted successfuly');
    }
}

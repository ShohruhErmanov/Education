<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Topbar;

class TopbarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $topbars = Topbar::all();
        return view('admin.topbar.index', compact('topbars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.topbar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'topbar' => 'required',
            'topbaricon' => 'required',
            'link' => 'required',
         ]);


        Topbar::create($request->all());
        return redirect()->route('admin.topbar.index')->with('seccess', 'Topbar created saccessfuly');
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
    public function edit(Topbar $topbar)
    {
      return view('admin.topbar.edit', compact('topbar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Topbar $topbar)
    {
        $this->validate($request, [
            'topbar' => 'required',
            'topbaricon' => 'required',
         ]);

         $topbar->update($request->all());
         return redirect()->route('admin.topbar.index')->with('seccess', 'Topbar updated saccessfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Topbar $topbar)
    {
       $topbar->delete();
       return redirect()->route('admin.topbar.index')->with('seccess', 'Topbar deleted saccessfuly');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Topbaricon;

class TopbariconController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $topbaricons = Topbaricon::all();
        return view('admin.topbaricon.index', compact('topbaricons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.topbaricon.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'topbaricon' => 'required',
            'link' => 'required',
         ]);


        Topbaricon::create($request->all());
        return redirect()->route('admin.topbaricon.index')->with('seccess', 'Topbar Icon created saccessfuly');
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
    public function edit(Topbaricon $topbaricon)
    {
        return view('admin.topbaricon.edit', compact('topbaricon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Topbaricon $topbaricon)
    {
        $this->validate($request, [
            'topbaricon' => 'required',
            'link' => 'required',
         ]);

         $topbaricon->update($request->all());
         return redirect()->route('admin.topbaricon.index')->with('seccess', 'Topbar Icon updated saccessfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Topbaricon $topbaricon)
    {
        $topbaricon->delete();
        return redirect()->route('admin.topbaricon.index')->with('seccess', 'Topbar Icon deleted saccessfuly');
    }
}

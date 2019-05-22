<?php

namespace App\Http\Controllers;

use App\Voyage;
use Illuminate\Http\Request;

class VoyageAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voyages = Voyage::all();

        return view('admin.index', ['voyages' => $voyages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $voyage = new Voyage();
        $voyage->title = $request->title;
        $voyage->image = $request->image;
        $voyage->price = $request->price;
        $voyage->destination = $request->destination;
        $voyage->description = $request->description;
        $voyage->save();

        $voyages = Voyage::all();

        return view('admin.index', ['voyages' => $voyages]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Voyage  $voyage
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $voyage = Voyage::findOrFail($id);

        return view('admin.show', ['voyage' => $voyage]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Voyage  $voyage
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $voyage = Voyage::findOrFail($id);
        return view('admin.edit', ['voyage' => $voyage]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Voyage  $voyage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voyage $voyage)
    {
        $voyage->title = $request->title;
        $voyage->image = $request->image;
        $voyage->price = $request->price;
        $voyage->destination = $request->destination;
        $voyage->description = $request->description;
        $voyage->save();

        $voyages = Voyage::all();

        return view('admin.index', ['voyages' => $voyages]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Voyage  $voyage
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $voyage = Voyage::find($id);
        $voyage->delete();

        $voyages = Voyage::all();

        return view('admin.index', ['voyages' => $voyages]);
    }
}
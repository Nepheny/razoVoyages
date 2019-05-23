<?php

namespace App\Http\Controllers;

use App\Voyage;
use Illuminate\Http\Request;
use Validator;

class VoyageAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'image' => 'required',
            'price' => 'required|max:3000',
            'destination' => 'required|max:255',
            'description' => 'required'
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $voyage = new Voyage();
        $voyage->title = $request->title;
        $voyage->image = $request->image;
        $voyage->price = $request->price;
        $voyage->destination = $request->destination;
        $voyage->description = $request->description;
        $voyage->save();
;
        return redirect()->route('admin.voyages.index')->with(["status" =>"Voyage ajouté"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
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
     * @param  int  $id
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
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'image' => 'required',
            'price' => 'required|max:3000',
            'destination' => 'required|max:255',
            'description' => 'required'
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $voyage->title = $request->title;
        $voyage->image = $request->image;
        $voyage->price = $request->price;
        $voyage->destination = $request->destination;
        $voyage->description = $request->description;
        $voyage->save();

        return redirect()->route('admin.voyages.index')->with(["status" =>"Voyage mis à jour"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $voyage = Voyage::find($id);
        $voyage->delete();

        return redirect()->route('admin.voyages.index')->with(["status" =>"Voyage supprimé"]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Voyage;
use Illuminate\Http\Request;

class VoyageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voyages = Voyage::all();

        return view('index', ['voyages' => $voyages]);
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

        return view('show', ['voyage' => $voyage]);
    }

    /**
     * Display a specific listinf og the resource.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $voyages = Voyage::where('title', 'Like', "%$request->title%")->orderBy('id','desc')->get(); 

        return view('index', ['voyages' => $voyages]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Commantaire;
use Illuminate\Http\Request;

class CommantaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'content' => 'required|min:10:'

        ]);

        Commantaire::create($request->all());

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commantaire  $commantaire
     * @return \Illuminate\Http\Response
     */
    public function show(Commantaire $commantaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commantaire  $commantaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Commantaire $commantaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Commantaire  $commantaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commantaire $commantaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commantaire  $commantaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commantaire $commantaire)
    {
        //
    }
}

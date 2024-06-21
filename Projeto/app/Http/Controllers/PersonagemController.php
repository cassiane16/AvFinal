<?php

namespace App\Http\Controllers;

use App\Models\Personagem;
use Illuminate\Http\Request;

class PersonagemController extends Controller
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
        return view('layouts.criar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {//dd($request);
        $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Personagem  $personagem
     * @return \Illuminate\Http\Response
     */
    public function show(Personagem $personagem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Personagem  $personagem
     * @return \Illuminate\Http\Response
     */
    public function edit(Personagem $personagem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Personagem  $personagem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personagem $personagem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Personagem  $personagem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personagem $personagem)
    {
        //
    }
}

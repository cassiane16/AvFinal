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
    {//dd($request->all());
        Personagem::create(['nome'=>$request->nome]);
        return 'Cadastro concluido com sucesso';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Personagem  $personagem
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $personagem= Personagem::findOrFail($id); 
      return view('layouts.show', ['personagem'=>$personagem]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Personagem  $personagem
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $personagem= Personagem::findOrFail($id); 
      return view('layouts.editar', ['personagem'=>$personagem]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Personagem  $personagem
     * @return \Illuminate\Http\Response
     */
    public function update($request, $id)
    {
        $personagem= Personagem::findOrFail($id); 
        Personagem::update(['nome'=>$request->nome]);
        return "Personagem atualizado";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Personagem  $personagem
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $produto->delete(); 
       return 'produto deletado';
    }
    
    public function delete($id)
    {
       $personagem= Personagem::findOrFail($id); 
       return view('layouts.deletar',['personagem'=>$personagem]);
    }
}

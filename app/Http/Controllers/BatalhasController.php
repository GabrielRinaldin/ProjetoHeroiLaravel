<?php

namespace App\Http\Controllers;

use App\Models\Batalha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class BatalhasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batalhas = Batalha::all();
        return view('batalhas.index', ['batalhas' => $batalhas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function new()
    {
        return view('batalhas.createBatalha');
    }
    public function create(Request $request)
    {
        $batalha = new Batalha();
        $batalha = $batalha->create($request->all());
        Session::flash('mensagem_sucesso', 'Uma nova batalha foi inserida nos registros!!!');
        return Redirect::to('batalha');


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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Batalha  $batalha
     * @return \Illuminate\Http\Response
     */
    public function show(Batalha $batalha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Batalha  $batalha
     * @return \Illuminate\Http\Response
     */
    public function edit(Batalha $batalha)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Batalha  $batalha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Batalha $batalha)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Batalha  $batalha
     * @return \Illuminate\Http\Response
     */
    public function destroy(Batalha $batalha)
    {
        //
    }
}

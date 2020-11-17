<?php

namespace App\Http\Controllers;

use App\Models\Arma;
use App\Models\Heroi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ArmasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {    $arma = Arma::all();
        $heroi = Heroi::find($id);

        return view('armas.index', ['arma' => $arma, 'heroi' => $heroi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function new($id)
     {
         $heroi = Heroi::find($id);
         return view('armas.createArma', ['heroi' => $heroi]);
     }
    public function create(Request $request, $heroi)
    {
        $arma = new Arma();
        $arma = $arma->create($request->all());
        Session::flash('mensagem_sucesso', 'Uma nova identidade foi atribuidada ao seu heroi!!!');
        return Redirect::to('heroi/arma/'.$heroi);
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
     * @param  \App\Models\Arma  $arma
     * @return \Illuminate\Http\Response
     */
    public function show(Arma $arma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Arma  $arma
     * @return \Illuminate\Http\Response
     */
    public function edit(Arma $arma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Arma  $arma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Arma $arma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Arma  $arma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Arma $arma)
    {
        //
    }
}

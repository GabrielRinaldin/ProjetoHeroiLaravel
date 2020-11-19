<?php

namespace App\Http\Controllers;

use App\Models\Batalha;
use App\Models\Heroi;
use App\Models\HeroisBatalha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class HeroisBatalhaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {   
        $batalha = Batalha::find($id);
        $heroi = Heroi::find($id);
        $heroisbatalha = HeroisBatalha::with('heroi', 'batalha')->get();

        return view('batalhas.batalhaheroi.index', 
        [   'batalha' => $batalha,
            'heroi' => $heroi,            
            'heroisbatalha' => $heroisbatalha]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function new($id, Heroi $heroi)
     {
         $batalha = Batalha::find($id);
         $heroi = Heroi::all()->pluck('name', 'id');        
         return view('batalhas.batalhaheroi.createHeroiBatlha', [ 'batalha' => $batalha, 'heroi' => $heroi]);
     }
    public function create(Request $request, $batalha)
    {

        $heroibatalha = new HeroisBatalha();
        $heroibatalha = $heroibatalha->create($request->all());
        Session::flash('mensagem_sucesso', 'Um novo heroi foi incluido a batalha!!!');
        return Redirect::to('batalha/'.$batalha.'/heroi');
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
     * @param  \App\Models\HeroisBatalha  $heroisBatalha
     * @return \Illuminate\Http\Response
     */
    public function show(HeroisBatalha $heroisBatalha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HeroisBatalha  $heroisBatalha
     * @return \Illuminate\Http\Response
     */
    public function edit(HeroisBatalha $heroisBatalha)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HeroisBatalha  $heroisBatalha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HeroisBatalha $heroisBatalha)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HeroisBatalha  $heroisBatalha
     * @return \Illuminate\Http\Response
     */
    public function destroy(HeroisBatalha $heroisBatalha)
    {
        //
    }
}

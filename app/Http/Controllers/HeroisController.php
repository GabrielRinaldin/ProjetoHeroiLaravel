<?php

namespace App\Http\Controllers;

use App\Models\Heroi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class HeroisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $herois = Heroi::get();
        return view('herois.index', ['herois' => $herois]);
    }


    public function new()
    {
        return view('herois.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
                $heroi = new Heroi();
                $heroi = $heroi->create($request->all());
                Session::flash('mensagem_sucesso', 'Um novo heroi foi incluido ao time!!!');
                return Redirect::to('heroi');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Heroi  $heroi
     * @return \Illuminate\Http\Response
     */
    public function show(Heroi $heroi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Heroi  $heroi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $heroi = Heroi::findorFail($id);
        return view('herois.edit', ['heroi' => $heroi]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Heroi  $heroi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $heroi = Heroi::findorFail($id);
        $heroi->update($request->all());
        Session::flash('mensagem_sucesso', 'Heroi atualizado com sucesso!');
        return Redirect::to('heroi/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Heroi  $heroi
     * @return \Illuminate\Http\Response
     */

    public function delete($id)
    {  
        $heroi = Heroi::findorFail($id);
        return view('herois.delete', ['heroi' => $heroi]);
    }

    public function destroy($id)
    {
       $heroi = Heroi::findorFail($id);
       $heroi->delete();
       Session::flash('mensagem_sucesso', 'Heroi excluido com sucesso!');
       return Redirect::to('heroi/');

    }
}

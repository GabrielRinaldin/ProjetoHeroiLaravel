<?php

namespace App\Http\Controllers;

use App\Models\Vilao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ViloesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $viloes = Vilao::get();
        return view('viloes.index', ['viloes' => $viloes]);
    }

    public function new()
    {
        return view('viloes.create');
    }
    public function create(Request $request)
    {
        $vilao = new Vilao();
        $vilao = $vilao->create($request->all());
        Session::flash('mensagem_sucesso', 'Um novo vilão foi inserido ao Grupo dos Vilões!!!');
        return Redirect::to('vilao');
        
        
    }
    
    public function update(Request $request, Viloes $viloes)
    {
        //
    }

    public function destroy(Viloes $viloes)
    {
        //
    }
}

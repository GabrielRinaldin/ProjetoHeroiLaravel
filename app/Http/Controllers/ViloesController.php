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
    public function edit($id)
    {
        $vilao = Vilao::findorFail($id);
        return view('viloes.edit', ['vilao' => $vilao]);
    }
    
    public function update(Request $request, $id)
    {
        $vilao = Vilao::findorFail($id);
        $vilao->update($request->all());
        Session::flash('mensagem_sucesso', 'Vilão atualizado com sucesso!');
        return Redirect::to('vilao');
    }

    public function delete($id)
    {
        $vilao = Vilao::findorFail($id);
        return view('viloes.delete', ['vilao' => $vilao]);
    }

    public function destroy($id)
    {
        $vilao = Vilao::findorFail($id);
        $vilao = $vilao->delete();
        Session::flash('mensagem_sucesso', 'Vilão excluido com sucesso!');
        return Redirect::to('vilao/');
    }
}

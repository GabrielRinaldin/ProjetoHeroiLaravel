<?php

namespace App\Http\Controllers;

use App\Models\ArmasVilao;
use App\Models\Vilao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ArmasVilaoController extends Controller
{
    public function index($id)
    {    
        $armavilao = ArmasVilao::all();
        $vilao = Vilao::find($id);
        return view('viloes.armas.index', ['armavilao' => $armavilao, 'vilao' => $vilao]);
    }

     public function new($id)
     {
         $vilao = Vilao::find($id);
         return view('viloes.armas.createArmaVilao', ['vilao' => $vilao]);
     }
    public function create(Request $request, $heroi)
    {
        $armavilao = new ArmasVilao();
        $armavilao = $armavilao->create($request->all());
        Session::flash('mensagem_sucesso', 'Uma nova identidade foi atribuidada ao seu heroi!!!');
        return Redirect::to('vilao/arma/'.$vilao);
    }

    public function delete($id)
    {
        $arma = Arma::findorFail($id);
        return view('herois.armas.deleteArma', ['arma' => $arma]);
    }

    public function destroy($id)
    {
        $arma = Arma::findorFail($id);
        $arma->delete();
        Session::flash('mensagem_sucesso', 'Arma excluida com sucesso!');
        return Redirect::to('heroi/');
    }
}
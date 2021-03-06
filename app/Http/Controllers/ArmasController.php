<?php

namespace App\Http\Controllers;

use App\Models\Arma;
use App\Models\Heroi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ArmasController extends Controller
{
    public function index($id)
    {    
        $arma = Arma::all();
        $heroi = Heroi::find($id);
        return view('herois.armas.index', ['arma' => $arma, 'heroi' => $heroi]);
    }

     public function new($id)
     {
         $heroi = Heroi::find($id);
         return view('herois.armas.createArma', ['heroi' => $heroi]);
     }
    public function create(Request $request, $heroi)
    {
        $arma = new Arma();
        $arma = $arma->create($request->all());
        Session::flash('mensagem_sucesso', 'Uma nova identidade foi atribuidada ao seu heroi!!!');
        return Redirect::to('heroi/arma/'.$heroi);
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
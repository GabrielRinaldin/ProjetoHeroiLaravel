<?php

namespace App\Http\Controllers;

use App\Models\Heroi;
use App\Models\Identidade;
use ErrorException;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class IdentidadesController extends Controller
{

    public function index($id)
    { 
            $identidade = Identidade::all();
            $heroi = Heroi::find($id);
    
            return view('herois.identidades.index', ['identidade' => $identidade, 'heroi' => $heroi]);
    }


    public function new($id)
    {
        $heroi = Heroi::find($id);
        return view('herois.identidades.createIdentity', ['heroi' => $heroi]);
    }

    public function create(Request $request, $heroi)
    {
                $identidade = new Identidade();
                $identidade = $identidade->create($request->all());
                Session::flash('mensagem_sucesso', 'Uma nova identidade foi atribuidada ao seu heroi!!!');
                return Redirect::to('heroi/identity/'.$heroi);
    }

    public function delete($id)
    {  
        $identidade = Identidade::findorFail($id);
        return view('herois.identidades.deleteIdentity', ['identidade' => $identidade]);
    }

    public function destroy($id)
    {
       $identidade = Identidade::findorFail($id);
       $identidade->delete();
       Session::flash('mensagem_sucesso', 'Identidade excluida com sucesso!');
       return Redirect::to('heroi/');

    }
}

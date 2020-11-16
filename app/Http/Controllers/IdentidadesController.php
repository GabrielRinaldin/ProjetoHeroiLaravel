<?php

namespace App\Http\Controllers;

use App\Models\Heroi;
use App\Models\Identidade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class IdentidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    { 
        $heroi = Heroi::find($id);
        $identidade = $heroi->identidade->all();
        return view('identidades.index',  
        [
        'identidades' => $identidade,
        ]);
        
    }


    public function new($id)
    {
        $heroi = Heroi::find($id);
        return view('identidades.createIdentity', [
            'heroi' => $heroi,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $heroi)
    {
                $identidade = new Identidade();
                $identidade = $identidade->create($request->all());
                Session::flash('mensagem_sucesso', 'Uma nova identidade foi atribuidada ao seu heroi!!!');
                return Redirect::to('heroi/identity/'.$heroi);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Identidade  $identidade
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $identidade = Identidade::findorFail($id);
        return view('identidades.edit', ['identidade' => $identidade]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Identidade  $identidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $identidade = Identidade::findorFail($id);
        $identidade->update($request->all());
        Session::flash('mensagem_sucesso', 'Identidade atualizada com sucesso!');
        return Redirect::to('identidade/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Identidade  $identidade
     * @return \Illuminate\Http\Response
     */

    public function delete($id)
    {  
        $identidade = Identidade::findorFail($id);
        return view('identidades.delete', ['identidade' => $identidade]);
    }

    public function destroy($id)
    {
       $identidade = Identidade::findorFail($id);
       $identidade->delete();
       Session::flash('mensagem_sucesso', 'Heroi excluido com sucesso!');
       return Redirect::to('identidade/');

    }
}

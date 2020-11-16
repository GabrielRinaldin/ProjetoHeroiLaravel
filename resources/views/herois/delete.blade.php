@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Os herois mais fortes da terra') }}</div>

                    <div>   
                        <h1>Quer mesmo tirar esse camarada do grupo?</h1>
                        <h2>Pense bem, isso não podera ser desfeito!</h2>                          
                        {!! Form::open(['method' => 'DELETE', 'url' => 'heroi/delete/'.$heroi->id, ]) !!}
                                        <button type="submit" class="float-right">Não quero mais ele aqui!!!</button>
                        {!! Form::close() !!}
                </div>
                         
             </div>
        </div>
    </div>
@endsection

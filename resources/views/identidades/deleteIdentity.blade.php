@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Os herois mais fortes da terra') }}</div>

                    <div>   
                        <h1>Essa não é mais a indetidade secreta do seu Heroi?</h1>
                        <h2>Pense bem, isso não podera ser desfeito!</h2>                          
                        {!! Form::open(['method' => 'DELETE', 'url' => 'heroi/identity/'.$identidade->id.'/delete', ]) !!}
                                        <button type="submit" class="float-right">Confirmar exclusão!!!</button>
                        {!! Form::close() !!}
                </div>
                         
             </div>
        </div>
    </div>
@endsection

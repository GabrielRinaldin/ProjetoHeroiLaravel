@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Insira os dados abaixo') }}

                </div>
                        <div>
                            <div>
                                {!! Form::open(['route' => 'createArma', 'url' => 'heroi/arma/'.$heroi->id.'/create']) !!}
                                @include('templates.formulario.input', ['input' => 'name', 'attributes' => ['placeholder' => 'Nome']])
                                @include('templates.formulario.inputhidden', ['input' => 'heroi_id', 'value' => $heroi->id ,'attributes' => ['placeholder' => 'Identidade']])
                                @include('templates.formulario.submit', ['input' => 'Cadastrar'])
                                {!! Form::close() !!}            
                            </div>                                               
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

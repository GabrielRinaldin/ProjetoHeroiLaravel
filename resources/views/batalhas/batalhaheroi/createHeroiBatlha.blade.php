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
                                {!! Form::open(['route' => 'createHeroiBatalha', 'url' => 'batalha/'.$batalha->id.'/heroi/create']) !!}
                                @include('templates.formulario.select', ['label' => 'Heroi' ,'select' => 'heroi_id', 'value' => $heroi, 'attributes' => ['placeholder' => 'Nome']])
                                @include('templates.formulario.inputhidden', ['input' => 'batalha_id', 'value' => $batalha->id, 'attributes' => ['placeholder' => 'Batlha']])
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

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
                                {!! Form::open(['route' => 'createBatalha']) !!}
                                @include('templates.formulario.input', ['input' => 'batalha', 'attributes' => ['placeholder' => 'Batalha']])
                                @include('templates.formulario.input', ['input' => 'descricao', 'attributes' => ['placeholder' => 'Descrição']])
                                @include('templates.formulario.input', ['input' => 'datainicio', 'attributes' => ['placeholder' => 'Data de Início']])
                                @include('templates.formulario.input', ['input' => 'datafim', 'attributes' => ['placeholder' => 'Data de Termino']])
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

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
                                {!! Form::open(['route' => 'create']) !!}
                                @include('templates.formulario.input', ['input' => 'name', 'attributes' => ['placeholder' => 'Nome']])
                                @include('templates.formulario.input', ['input' => 'levelpower', 'attributes' => ['placeholder' => 'Nivel de Poder']])
                                @include('templates.formulario.input', ['input' => 'heigth', 'attributes' => ['placeholder' => 'Altura']])
                                @include('templates.formulario.input', ['input' => 'weigth', 'attributes' => ['placeholder' => 'Peso']])
                                @include('templates.formulario.input', ['input' => 'status', 'attributes' => ['placeholder' => 'Status']])
                                @include('templates.formulario.input', ['input' => 'image', 'attributes' => ['placeholder' => 'Foto']])
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

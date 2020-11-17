@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Os herois mais fortes da terra') }}
                        <button class="float-right"><a href="{{route('new')}}">Novo Heroi</a></button>
                </div>
                        <div>
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            @if (Session::has('mensagem_sucesso'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('mensagem_sucesso') }}
                                </div>
                            @endif
                        <table>
                            <thead>
                                <tr>
                                    <td>Foto</td>
                                    <td>Nome</td>
                                    <td>Level de Poder</td>
                                    <td>Altura</td>
                                    <td>Peso</td>
                                    <td>Status</td>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($herois as $heroi)
                                 <tr>
                                <td>{{$heroi->image}}</td>
                                <td>{{$heroi->name}}</td>
                                <td>{{$heroi->levelpower}} Pontos de poder</td>
                                <td>{{$heroi->heigth}}</td>
                                <td>{{$heroi->weigth}}</td>
                                <td>{{$heroi->status}}</td>
                                <td>
                                    <button class="float-right"><a href="{{route('identity', $heroi->id )}}">Identidade Secreta</a></button>
                                 </td>
                                 <td>
                                    <button class="float-right"><a href="{{route('arma')}}">Arsenal de Guerra</a></button>
                                 </td>
                                <td>
                                <button class="float-right"><a href="{{route('edit', $heroi->id)}}">Editar integrante</a></button>
                                </td>
                                <td>
                                <button class="float-right"><a href="{{route('delete', $heroi->id)}}">Expulsar do grupo</a></button>
                                </td>
                                @endforeach
                                   
                                </tr>
                            </tbody>
                        </table>
                        </div>
                </div>
                         
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

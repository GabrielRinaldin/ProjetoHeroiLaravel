@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Os herois mais fortes da terra') }}
                    <button class="float-right btn btn-outline-success"><a href="{{route('new')}}">Novo
                            Heroi</a></button>
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

                    <div class="table-responsive">
                        <table class=" table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>Foto</th>
                                    <th>Nome</th>
                                    <th>Nivel de Poder</th>
                                    <th>Altura</th>
                                    <th>Peso</th>
                                    <th>Status</th>
                                    <th>Identidade</th>
                                    <th>Armas</th>
                                    <th>Att</th>
                                    <th>Deletar</th>
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
                                        <a href="{{route('identity', $heroi->id )}}"><button
                                                class="float-right btn btn-outline-dark"><i
                                                    class="fa fa-user-secret fa-lg"></i></button></a>
                                    </td>
                                    <td>
                                        <a href="{{route('arma', $heroi->id )}}"><button
                                                class="float-right btn btn-outline-primary"><i
                                                    class="fa fa-cogs fa-lg"></i></button></a>
                                    </td>
                                    <td>
                                        <a href="{{route('edit', $heroi->id )}}"><button
                                                class="float-right btn btn-outline-secondary"><i
                                                    class="fa fa-edit fa-lg"></i></button></a>
                                    </td>
                                    <td>
                                        <a href="{{route('delete', $heroi->id)}}"><button
                                                class="float-right btn btn-outline-danger"><i
                                                    class="fa fa-bomb fa-lg"></i></button></a>
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
@endsection
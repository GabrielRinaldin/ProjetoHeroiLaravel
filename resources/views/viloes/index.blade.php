@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Os Vilões mais devastadores da terra') }}
                        <button class="float-right btn btn-outline-success"><a href="{{route('newVilao')}}">Novo Vilão</a></button>
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
                                            <th>Armas</th>
                                            <th>Att</th>
                                            <th>Deletar</th>
                                        </tr>
                                    </thead>
        
                                    <tbody>
                                        @foreach ($viloes as $vilao)
                                         <tr>
                                        <td>{{$vilao->image}}</td>
                                        <td>{{$vilao->name}}</td>
                                        <td>{{$vilao->levelpower}} Pontos de poder</td>
                                        <td>{{$vilao->heigth}}</td>
                                        <td>{{$vilao->weigth}}</td>
                                        <td>{{$vilao->status}}</td>
                                        <td>
                                            <a href="{{route('armaVilao', $vilao->id )}}"><button class="float-right btn btn-outline-primary"><i class="fa fa-cogs fa-lg"></i></button></a>
                                        </td>
                                        <td>    
                                            <a href="{{route('editVilao', $vilao->id )}}"><button class="float-right btn btn-outline-secondary"><i class="fa fa-edit fa-lg"></i></button></a>
                                        </td>
                                        <td>    
                                            <a href="{{route('deleteVilao', $vilao->id )}}"><button class="float-right btn btn-outline-danger"><i class="fa fa-bomb fa-lg"></i></button></a>
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
    </div>
@endsection

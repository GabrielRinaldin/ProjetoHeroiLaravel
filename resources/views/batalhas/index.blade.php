@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Os herois mais fortes da terra') }}
                    <button class="float-right btn btn-outline-success"><a href="{{route('newBatalha')}}">Nova Batalha</a></button>
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
                                            <th>Id</th>
                                            <th>Batalha</th>
                                            <th>Descrição</th>
                                            <th>Início</th>
                                            <th>Fim</th>
                                            <th>Herois</th>
                                        </tr>
                                    </thead>
        
                                    <tbody>
                                        @foreach ($batalhas as $batalha)
                                        <tr>
                                            <td>{{$batalha->id}}</td>
                                            <td>{{$batalha->batalha}}</td>
                                            <td>{{$batalha->descricao}}</td>
                                            <td>{{$batalha->datainicio}}</td>
                                            <td>{{$batalha->datafim}}</td>
                                            <td>
                                            <a href="{{route('batalheroi', $batalha->id)}}" ><button class="float-right btn btn-outline-dark"><i class="fa fa-users fa-lg"></i></button></a>
                                            </td>
                                            <td>
                                                <a href=""><button class="float-right btn btn-outline-primary"><i class="fa fa-cogs fa-lg"></i></button></a>
                                            </td>
                                            <td>    
                                                <a href=""><button class="float-right btn btn-outline-secondary"><i class="fa fa-edit fa-lg"></i></button></a>
                                            </td>
                                            <td>    
                                                <a href=""><button class="float-right btn btn-outline-danger"><i class="fa fa-bomb fa-lg"></i></button></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                         
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

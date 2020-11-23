@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Os herois mais fortes da terra') }}
                    <button class="float-right btn btn-outline-success"><a href="{{route ('newHeroiBatalha', $batalha->id)}}">Inserir Heroi</a></button>
                </div>
                    <div class="card-header">{{ __('Os Herois que participaram desta batalha são:') }}</div>
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
                                            <th>#ID</th>
                                            <th>Nome</th>
                                        </tr>
                                    </thead>
        
                                    <tbody>
                                    @foreach($batalha->heroisbatalha as $heroibatalha)
                                        <tr>
                                            <th>{{$heroibatalha->batalha->batalha}}</th>
                                            <th>{{$heroibatalha->heroi->name}}</th>
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

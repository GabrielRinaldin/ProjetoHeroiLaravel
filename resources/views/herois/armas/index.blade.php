@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Os herois mais fortes da terra') }}
                    <button class="float-right"><a href="{{route ('newArma', $heroi->id)}}">De uma arma ao seu
                            heroi</a></button>
                </div>

                <div class="table-responsive">
                    <table class=" table table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <td>Este é o arsenal do seu campeão</td>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($heroi->armas as $arma)
                            <tr>
                                <td>{{$arma->name}}
                                    <a href="{{route('deleteArma', $arma->id ?? 'Null')}}"><button
                                            class="float-right btn btn-outline-danger"><i
                                                class="fa fa-bomb fa-lg"></i></button></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endsection
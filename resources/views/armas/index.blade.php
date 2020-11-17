@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Os herois mais fortes da terra') }}                     
                    <button class="float-right"><a href="{{route ('newArma', $heroi->id)}}">De uma arma ao seu heroi</a></button>
                    </div> 
                        <table disable="true">
                            <thead>
                                <tr>
                                    <td>Este é o arsenal do seu campeão</td>                        
                                </tr>
                            </thead>
                            
                            <tbody>  
                                @foreach ($heroi->armas as $arma)
                                <tr>
                                    <td>{{$arma->name}}</td>             
                                    </tr> 
                                @endforeach
                              
                                               
                                
                            </tbody>
                        </table>   
                </div>                    
            </div>
        </div>
    </div>   
@endsection
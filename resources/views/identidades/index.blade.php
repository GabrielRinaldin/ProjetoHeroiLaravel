@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Os herois mais fortes da terra') }}                     
                        <button class="float-right"><a href="{{route('newIdentity', $heroi->id)}}">Crie uma identidade secreta para seu heroi</a></button>
                    </div>  

                    <table>
                        <thead>
                            <tr>
                                <td> A dentidade Secreta do seu Heroi é</td>                        
                            </tr>
                        </thead>

                        <tbody>
                           
                            @foreach ($identidades as $identidade)        
                             <tr>
                            <td>{{$identidade->$identity}}</td>                          
                            <td>{{$identidade->$image}}</td>                          
                             </tr>
                             @endforeach
                        </tbody>
                    </table>
                </div>                    
            </div>
        </div>
    </div>
    
@endsection

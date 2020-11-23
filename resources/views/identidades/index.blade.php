@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Os herois mais fortes da terra') }}                     
                        <button class="float-right"><a href="{{route('newIdentity', $heroi->id)}}">Crie uma identidade secreta para seu heroi</a></button>
                    </div> 
                        <table disable="true">
                            <thead>
                                <tr>
                                    <td> A dentidade Secreta do seu Heroi é</td>                        
                                </tr>
                            </thead>
                            
                            <tbody>                            
                                <tr>
                                    <td>{{$heroi->identidade->identity ?? "Ultra Secreto" }}</td>                       
                                    <td>{{$heroi->identidade->image ?? "Ultra Secreto" }}</td>   
                                    <td>    
                                            <a href="{{route('deleteIdentity', $heroi->identidade->id ?? 'Null')}}"><button class="float-right btn btn-outline-danger"><i class="fa fa-bomb fa-lg"></i></button></a>
                                        </td>                    
                                </tr> 
                            </tbody>
                        </table>   
                </div>                    
            </div>
        </div>
    </div>   
@endsection
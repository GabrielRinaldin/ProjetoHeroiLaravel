@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Os herois mais fortes da terra') }}                     
                        <button class="float-right"><a href="">De uma arma ao seu heroi</a></button>
                    </div> 
                        <table disable="true">
                            <thead>
                                <tr>
                                    <td>Este é o arsenal do seu campeão</td>                        
                                </tr>
                            </thead>
                            
                            <tbody>                            
                                <tr>
                                    <td>Nada Cadastrado</td>             
                                </tr> 
                            </tbody>
                        </table>   
                </div>                    
            </div>
        </div>
    </div>   
@endsection
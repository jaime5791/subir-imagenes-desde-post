@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                </br></br>
                <div class="panel-heading"><h2>Usuario</h2></div>
                </br>
                <div class="panel-body">                                        
                    <p><strong>Nombre: </strong> {{ $user->name }}</p>
                    <p><strong>E-mail: </strong> {{ $user->email }}</p>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


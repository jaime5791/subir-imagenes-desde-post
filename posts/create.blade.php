@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                </br></br>
                <div class="panel-heading"><h2>Crear post</h2></div>
                </br>
                   <form method='post' class="col-sm-18 align-self-center" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <label class="col-form-label col-sm-4 pt-0"><h5>Texto del post</h5></label>
                        <textarea class="form-control" name="name" rows="2" placeholder="Aquí tu post"></textarea>
                    </div>

                    <fieldset class="form-group">
                        <div class="row">
                          <legend class="col-form-label col-sm-4 pt-0"><h5>Categoria</h5></legend>
                          <div class="col-sm-10">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="category_id" id="gridRadios1" value=1 checked>
                              <label class="form-check-label" for="gridRadios1">
                                Playas
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="category_id" id="gridRadios2" value=2>
                              <label class="form-check-label" for="gridRadios2">
                                Compra - Venta
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="category_id" id="gridRadios3" value=3>
                              <label class="form-check-label" for="gridRadios3">
                                Viajes
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="category_id" id="gridRadios3" value=4 >
                              <label class="form-check-label" for="gridRadios3">
                                Opinión
                              </label>
                          </div>
                        </div>
                      </fieldset>   

                    {!! Form::open(['route' => 'images.store', 'files' => true]) !!}
                    @csrf
                    
                      <div class="form-group">
                        <div class="row">
                         <legend class="col-form-label col-sm-4 pt-0"><h5>Foto, video...</h5></legend>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="url">
                      </div>
                      </div>
                      

                    <div >
                        <button type="submit" class="btn btn-sm btn-primary"name="enviar" value="Enviar"> Enviar </button>
                        <button type="reset" class="btn btn-sm btn-primary"name="borrar" value="Borrar"> Borrar </button>
                    </div>
                    {!! Form::close() !!}
                    </form> 


                    <!-- VALIDACION campos requqeridos -->
                    @if(count($errors)>0)
                     <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>  
                    </div>  
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
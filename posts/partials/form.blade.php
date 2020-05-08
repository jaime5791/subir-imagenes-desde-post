<div class="form-group ">
	<h5>
	{{ Form::label('name', 'Texto del post') }}</h5>
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<fieldset class="form-group">
                        <div class="row">
                          <legend class="col-form-label col-sm-4 pt-0"><h5>Categoria</h5></legend>
                          <div class="col-sm-10">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="category_id" id="gridRadios1" value=1 >
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

<!--
<div class="form-group">
{{ Form::label('category_id','Playas',array('id'=>'category_id','class'=>'')) }}
{{ Form::radio('category_id',$post->category_id==1, 'checked',false) }}
{{ Form::label('category_id','Compra-Venta',array('id'=>'category_id','class'=>'')) }}
{{ Form::radio('category_id',$post->category_id==2,'checked',false) }}
{{ Form::label('category_id','Viajes',array('id'=>'category_id','class'=>'')) }}
{{ Form::radio('category_id',$post->category_id==3,'checked',false) }}
{{ Form::label('category_id','Opinion',array('id'=>'category_id','class'=>'')) }}
{{ Form::radio('category_id',$post->category_id==4,'checked',false) }}
</div>  

<div class="form-group">
	{{ Form::label('category_id', 'Playas') }}
	{{ Form::radio('category_id',$post->category_id==1, 'checked',false, ['class' => '', 'category_id' => 'Playas']) }}
</div>
<div class="form-group">
	{{ Form::label('category_id', 'Compra-Venta') }}
	{{ Form::radio('category_id',$post->category_id==2, 'checked',false, ['class' => '', 'category_id' => 'Playas']) }}
</div>
<div class="form-group">
	{{ Form::label('category_id', 'Viajes') }}
	{{ Form::radio('category_id',$post->category_id==3, 'checked',false, ['class' => '', 'category_id' => 'Playas']) }}
</div>
<div class="form-group">
	{{ Form::label('category_id', 'Opinion') }}
	{{ Form::radio('category_id',$post->category_id==4, 'checked',false, ['class' => '', 'category_id' => 'Playas']) }}
</div>
-->
<!--
{{ Form::label('category_id', 'Playas')}} {{Form::radio('category_id', 'Playas', ($post->category->name) ? true : false )}}
{{ Form::label('category_id', 'Compra-Venta')}} {{Form::radio('category_id', 'Compra-Venta', ($post->category->name) ? true : false )}}
{{ Form::label('category_id', 'Viajes')}} {{Form::radio('category_id', 'Viajes', ($post->category->name) ? true : false )}}
{{ Form::label('category_id', 'Opinion')}} {{Form::radio('category_id', 'Opinion', ($post->category->name) ? true : false )}}
-->

<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>

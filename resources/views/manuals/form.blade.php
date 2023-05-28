@if(empty($manual))
{!! Form::open(['route' => 'manuals.store' , 'enctype' => 'multipart/form-data']) !!}
@else
{!! Form::model($manual, ['route' => ['manuals.update', $manual->id], 'method' => 'PUT']) !!}
@endif
<div class="card card-custom gutter-b example example-compact">
  <div class="card-header">
    <h3 class="card-title">
      Agregar manual
    </h3>
  </div>
  <div class="card-body">
    <div class="form-group form-group-last">
      <div class="row">
        <div class="col-md-6">
          {{ Form::label('Nombre del manual')}}
          {{ Form::text('name', null, ['class'  => 'form-control', 'placeholder' => 'Ingesa el nombre del manual']) }}
        </div>
        <div class="col-md-6">
          {{ Form::label('Descripción del manual')}}
          {{ Form::text('description', null, ['class'  => 'form-control', 'placeholder' => 'Ingesa la descripcion del manual']) }}
        </div>
      </div>
      <div class="row" style="margin-top:20px">
        <div class="col-md-6">
          {{ Form::label('Elija Una Categoria')}}
          {{ Form::select('category_id',$category, null, ['class'  => 'form-control','id' => 'categoryId','placeholder' => 'seleccione una categoria', 'required']) }}
        </div>
        <div class="col-md-6">
          {{ Form::label('Elija Una Subcategoria')}}
          {{ Form::select('subcategory_id',$subcategory, null, ['class'  => 'form-control','id' => 'subcategoryId','placeholder' => 'seleccione una Subcategoria', 'required']) }}
        </div>

      </div>
      <div class="row" style="margin-top:20px">
        {{ Form::label('image', 'Subir manual') }}
        {{ Form::file('image', ['class' => 'form-control', 'required']) }}
      </div>
    </div>
  </div>
  <div class="card-footer">
    <button type="submit" class="btn btn-primary mr-2">Guardar</button>
    <button type="reset" class="btn btn-secondary">Cancelar</button>
  </div>
</div>

{!! Form::close() !!}
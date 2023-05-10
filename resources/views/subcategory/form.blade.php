@if(empty($subcategory))
{!! Form::open(['route' => 'subcategory.store']) !!}
@else
{!! Form::model($subcategory, ['route' => ['subcategory.update', $subcategory->id], 'method' => 'PUT']) !!}
@endif
<div class="card card-custom gutter-b example example-compact">
  <div class="card-header">
    <h3 class="card-title">
      Agregar Sub categoria
    </h3>
  </div>
  <div class="card-body">
    <div class="form-group form-group-last">
      <div class="row">
        <div class="col-md-6">
          {{ Form::label('Nombre de la subcategoria')}}
          {{ Form::text('name', null, ['class'  => 'form-control', 'placeholder' => 'Ingesa el nombre del curso']) }}
        </div>
        <div class="col-md-6">
          {{ Form::label('Elija Una Categoria')}}
          {{ Form::select('category_id',$category, null, ['class'  => 'form-control','id' => 'categoryId','placeholder' => 'seleccione una categoria', 'required']) }}
        </div>
      </div>
      <div class="row mt-8">
        <div class="col-md-12">
          {{ Form::label('Descripción de la subcategoria')}}
          {{ Form::text('description', null, ['class'  => 'form-control', 'placeholder' => 'Ingesa la descripción de la sub categoria']) }}
        </div>
      </div>
    </div>
  </div>
  <div class="card-footer">
    <button type="submit" class="btn btn-primary mr-2">Guardar</button>
    <button type="reset" class="btn btn-secondary">Cancelar</button>
  </div>
</div>

{!! Form::close() !!}
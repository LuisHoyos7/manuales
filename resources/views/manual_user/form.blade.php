@if(empty($user))
{!! Form::open(['route' => 'user.store' , 'enctype' => 'multipart/form-data']) !!}
@else
{!! Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'PUT']) !!}
@endif
<div class="card card-custom gutter-b example example-compact">
  <div class="card-header">
    <h3 class="card-title">
      Agregar usuario
    </h3>
  </div>
  <div class="card-body">
    <div class="form-group form-group-last">
      <div class="row">
        <div class="col-md-6">
          {{ Form::label('Nombre del usuario')}}
          {{ Form::text('name', null, ['class'  => 'form-control', 'placeholder' => 'Ingesa el nombre del manual']) }}
        </div>
        <div class="col-md-6">
          {{ Form::label('Email')}}
          {{ Form::text('email', null, ['class'  => 'form-control', 'placeholder' => 'Ingesa la descripcion del manual']) }}
        </div>
      </div>
      <div class="row" style="margin-top:20px">
        <div class="col-md-6">
          {{ Form::label('Elija un rol')}}
          {{ Form::select('rol_id',$rol, null, ['class'  => 'form-control','id' => 'rolId','placeholder' => 'seleccione un rol', 'required']) }}
        </div>
        <div class="col-md-6">
          <label>Contraseña</label>
          <input name="password" class="form-control" type="password">
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
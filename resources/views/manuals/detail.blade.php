@extends('layouts.app')

@section('content')
<div class="card card-custom gutter-b example example-compact">
  <div class="card-header">
    <h5 class="card-title">
      Detalles especificos de los manuales
    </h5>
  </div>

  <div class="row" style="margin-top: 20px; text-align: center;">
    <div class="col-4">
      <div class=" col-12">
        <label>Nombre</label>
        <input disabled class="form-control" value="{{$manual->name}}" style="text-align: center;">
      </div>
      <div class="col-12" style="margin-top: 20px;">
        <label>Descripción</label>
        <input disabled class="form-control" value="{{$manual->description}}" style="text-align: center;">
      </div>
      <div class="col-12" style="margin-top: 20px;">
        <label>Estado</label>
        <input disabled class="form-control" value="{{$manual->state}}" style="text-align: center;">
      </div>
      <div class="col-12" style="margin-top: 20px;">
        <label>Usuario que lo cargó</label>
        <input disabled class="form-control" value="{{$manual->user->name}}" style="text-align: center;">
      </div>
      <div class="col-12" style="padding-bottom: 20px; margin-top: 20px;">
        <label>Fecha de creación</label>
        <input disabled class="form-control" value="{{$manual->created_at}}" style="text-align: center;">
      </div>
    </div>


    <div class="col-4">
      <div class="form-group form-group-last">
        <p>Cometarios</p>
        <h5>Super el Manual</h5>
        <h5>Falta mejorar el flujo</h5>
      </div>
    </div>
    <div class="col-4">
      <div class="form-group form-group-last">
        <p>Calificaciónes</p>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
    </div>
  </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
@include('layouts.flash-message')
<div class="card card-custom gutter-b example example-compact">
  <div class="card-header">
    <h5 class="card-title">
      Detalles especificos de los manuales
    </h5>
  </div>

  <div class="row" style="margin: 20px; text-align: center;">
    <div class=" col-3">
      <label>Nombre</label>
      <input disabled class="form-control" value="{{$manual->name}}" style="text-align: center;">
    </div>
    <div class="col-3">
      <label>Descripción</label>
      <input disabled class="form-control" value="{{$manual->description}}" style="text-align: center;">
    </div>
    <div class="col-3">
      <label>Usuario que lo cargó</label>
      <input disabled class="form-control" value="{{$manual->user->name}}" style="text-align: center;">
    </div>
    <div class="col-3">
      <label>Fecha de creación</label>
      <input disabled class="form-control" value="{{$manual->created_at}}" style="text-align: center;">
    </div>
    <div class="col-6" style="margin-top:20px">
      <div class="form-group form-group-last" style="display: flex; justify-content: center;">
        <div style="margin-top:8px">
          Comentarios
        </div>
        <div style="margin-left: 20px;">
          <a href="#" class="btn btn-icon btn-outline-success btn-shadow font-weight-bold btn-sm open-modal" data-theme="dark" title="Agregar">
            <i class="flaticon-add"></i>
          </a>
        </div>
      </div>

      @foreach($comments as $comment)
      <div class="comment-container">
        <div class="comment-username">{{$comment->user->name}}</div>
        <div class="comment-description">{{$comment->description}}</div>
        <div class="comment-date">{{$comment->created_at->format('d/m/Y H:i')}}</div>
        <!-- Botón para eliminar el comentario -->
        {{Form::open(['route' => ['comment.destroy', $comment->id], 'method' => 'DELETE'])}}
        <p class="delete-comment-btn">
          <button type="submit" class="btn btn-outline-danger delete-icon fas fa-trash-alt" data-toggle="tooltip" data-theme="dark" title="Eliminar comentario"></button>
        </p>
        {{Form::close()}}
      </div>
      @endforeach
    </div>
    <div class="col-6" style="margin-top:20px">
      <div class="form-group form-group-last">
        {{Form::open(['route' => ['comment.show', $raiting ? $raiting->id : 0], 'method' => 'GET'])}}
        <p>Calificaciónes</p>
        <div style="display:flex; justify-content: center; margin-top:35px">
          <div class="mr-4" style="width: 20%;">
            <input hidden name="manual_id" value="{{$manual->id}}">
            <select name="calification" class="form-control">
              <option value=" 1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
          <div>
            <button class="btn btn-success">Guardar</button>
          </div>
        </div>
        {{Form::close()}}
        <div class="rating">
          <?php
          $calification = $raitingGlobal;
          $fullStars = floor($calification); // Parte entera de la calificación
          $halfStar = ceil($calification - $fullStars); // Estrella media (si corresponde)
          $emptyStars = 5 - $fullStars - $halfStar; // Estrellas vacías
          ?>

          <?php for ($i = 0; $i < $fullStars; $i++) : ?>
            <i class="fas fa-star"></i> <!-- Usar aquí el icono de estrella que prefieras -->
          <?php endfor; ?>

          <?php if ($halfStar) : ?>
            <i class="fas fa-star-half-alt"></i> <!-- Estrella media (icono medio de estrella) -->
          <?php endif; ?>

          <?php for ($i = 0; $i < $emptyStars; $i++) : ?>
            <i class="far fa-star"></i> <!-- Estrella vacía (icono de estrella sin rellenar) -->
          <?php endfor; ?>
          <div class="mt-2">
            <h1>{{number_format($raitingGlobal,1)}}</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- El modal -->
<div class="modal" id="modalComment">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Aquí puedes agregar el contenido de tu modal, como encabezado, cuerpo y botones -->
      <div class="modal-header">
        <h5 class="modal-title">Agregar comentario</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      {!! Form::open(['route' => 'comment.store']) !!}
      <div class="modal-body">
        <!-- Contenido del modal -->
        <label>Comentario</label>
        <textarea name="description" class="form-control"></textarea>
        <input hidden name="manual_id" value="{{$manual->id}}">
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary mr-2">Guardar</button>
        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<script>
  // Esperar a que el documento esté completamente cargado
  $(document).ready(function() {
    // Asociar un evento de clic al enlace con la clase 'open-modal'
    $('.open-modal').click(function(e) {
      e.preventDefault(); // Prevenir el comportamiento predeterminado del enlace
      $('#modalComment').modal('show'); // Mostrar el modal con el ID 'miModal'
    });
  });
</script>

<style>
  /* Estilo para el contenedor de cada comentario */
  .comment-container {
    background-color: #f8f9fa;
    padding: 15px;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    position: relative;
  }

  /* Estilo para el nombre del usuario */
  .comment-username {
    font-weight: bold;
    color: #007bff;
    /* Cambia este color si deseas otro diferente */
    font-size: 14px;
    margin-bottom: 5px;
  }

  /* Estilo para el cuerpo del comentario */
  .comment-description {
    font-size: 16px;
    line-height: 1.6;
    color: #333;
  }

  /* Estilo para la fecha del comentario */
  .comment-date {
    font-style: italic;
    color: #888;
    font-size: 12px;
  }

  /* Estilo para el botón de eliminar comentario */
  .delete-comment-btn {
    color: #dc3545;
    /* Color rojo para el botón */
    font-size: 14px;
    cursor: pointer;
    position: absolute;
    top: 5px;
    right: 5px;
    opacity: 0;
    transition: opacity 0.2s ease-in-out;
  }

  /* Mostrar los botones al pasar el ratón por encima del comentario */
  .comment-container:hover .delete-comment-btn,
  .comment-container:hover .edit-comment-btn {
    opacity: 1;
  }

  /* Estilo para el icono de eliminar y editar */
  .delete-icon,
  .edit-icon {
    font-size: 16px;
    margin-right: 5px;
  }
</style>
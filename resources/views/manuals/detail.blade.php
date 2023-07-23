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
    <div class="col-6">
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
        <!-- Botón para editar el comentario (opcional) -->
        <!-- <p class="edit-comment-btn">
          <i class="edit-icon fas fa-edit"></i>Editar
        </p> -->
      </div>
      @endforeach
    </div>
    <div class="col-2">
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
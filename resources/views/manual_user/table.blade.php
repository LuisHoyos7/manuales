<div class="card card-custom gutter-b">
    <div class="card-header flex-wrap py-3">
        <div class="card-title">
            <h3 class="card-label">
                Manuales favoritos
                <span class="d-block text-muted pt-2 font-size-sm">Listado general de los manuales favoritos</span>
            </h3>
        </div>
    </div>
    <div class="card-body mb-10 px-20">
        <!--begin: Datatable-->
        <div id="kt_datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-head-custom table-hover table-vertical-center" id="category" role="grid" aria-describedby="kt_datatable_info">
                        <thead class="thead-light">
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($manual_user as $manual)
                            <tr>
                                <td>{{$manual->id}}</td>
                                <td>{{$manual->name}}</td>
                                <td>{{$manual->description}}</td>
                                <td>{{$manual->state}}</td>
                                <td>
                                    {{Form::open(['route' => ['manual_user.destroy', $manual->id], 'method' => 'DELETE'])}}
                                    <div class="btn-group-toggle" data-toggle="buttons">
                                        <a href="<?php echo $manual->url_file ?>" download="Manual.pdf" class="btn btn-icon btn-outline-info btn-shadow font-weight-bold btn-sm" data-toggle="tooltip" data-theme="dark" title="Descargar manual">
                                            <i class="flaticon-download"></i>
                                        </a>
                                        <button type="submit" class="btn btn-icon btn-outline-danger btn-shadow font-weight-bold btn-sm" data-toggle="tooltip" data-theme="dark" title="Eliminar Manual de favoritos">
                                            <i class="flaticon-delete-1"></i>
                                        </button>
                                    </div>
                                    {{Form::close()}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!--end: Datatable-->
    </div>
</div>
@extends('layout.plantilla')

@section('cabecera')

    @endsection

@section('contenido')

<?php /*

   $table->string('nombre_articulo');
            $table->string('seccion');
            $table->integer('precio');
            $table->string('fecha');
            $table->string('pais_origen');
            $table->timestamps();

 */?>
    <form method="post">
        <div class="form-group">
            <label for="nombreArticulo">Nombre articulo</label>
            <input type="text" class="form-control" id="nombreArticulo"  placeholder="Nombre articulo">
            <small id="emailHelp" class="form-text text-muted">Necesitamos el nombre del articulo.</small>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection

@section('pie')

@endsection
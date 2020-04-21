@extends('layout.plantilla')

@section('cabecera')

    @endsection

@section('contenido')

<?php /*



            $table->integer('precio');
            $table->string('fecha');
            $table->string('pais_origen');
            $table->timestamps();

 */?>

<div class="container">



    <div class="row">


        <div class="col"></div>
        <div class="col">
            <form method="post" action="/productos">
                <div class="form-group">
                    <label for="nombre_articulo">Nombre articulo</label>
                    <input type="text" class="form-control" id="nombre_articulo" name="nombre_articulo"  placeholder="Nombre articulo">

                </div>

                <div class="form-group">
                    <label for="seccion">Seccion</label>
                    <input type="text" class="form-control" id="seccion" name="seccion"  placeholder="seccion">

                </div>

                <div class="form-group">
                    <label for="precio">precio</label>
                    <input type="text" class="form-control" id="precio" name="precio"  placeholder="precio">

                </div>
                <div class="form-group">
                    <label for="fecha">fecha</label>
                    <input type="text" class="form-control" id="fecha" name="fecha"  placeholder="fecha">

                </div>
                <div class="form-group">
                    <label for="pais_origen">Pais origen</label>
                    <input type="text" class="form-control" id="pais_origen" name="pais_origen"  placeholder="Pais origen">

                </div>

                {{csrf_field()}}

                <button type="submit" class="btn btn-primary">Enviar</button>
                <button type="reset" class="btn btn-primary">Reset</button>
            </form>
        </div>
        <div class="col"></div>


    </div>

    </div>

</div>
@endsection

@section('pie')

@endsection
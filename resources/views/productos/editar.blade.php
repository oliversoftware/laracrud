@extends('layout.plantilla')

@section('cabecera')
<h1>Editar registros</h1>
@endsection


@section('contenido')
    <div class="container">



        <div class="row">


            <div class="col"></div>
            <div class="col">
                <form method="post" action="/productos/{{$producto->id}}">
                    <div class="form-group">
                        <label for="nombre_articulo">Nombre articulo</label>
                        <input type="text" class="form-control" id="nombre_articulo" name="nombre_articulo" value="{{$producto->nombre_articulo}}" placeholder="Nombre articulo">

                    </div>

                    <div class="form-group">
                        <label for="seccion">Seccion</label>
                        <input type="text" class="form-control" value="{{$producto->seccion}}" id="seccion" name="seccion"  placeholder="seccion">

                    </div>

                    <div class="form-group">
                        <label for="precio">precio</label>
                        <input type="text" class="form-control"  value="{{$producto->precio}}"id="precio" name="precio"  placeholder="precio">

                    </div>
                    <div class="form-group">
                        <label for="fecha">fecha</label>
                        <input type="text" class="form-control" value="{{$producto->fecha}}" id="fecha" name="fecha"  placeholder="fecha">

                    </div>
                    <div class="form-group">
                        <label for="pais_origen">Pais origen</label>
                        <input type="text" class="form-control" id="pais_origen" value="{{$producto->pais_origen}}" name="pais_origen"  placeholder="Pais origen">

                    </div>

                    {{csrf_field()}}

                    <input type="hidden"  name="_method" value="PUT">

                    <button type="submit" class="btn btn-primary">Editar</button>

                    <button type="reset" class="btn btn-primary">Reset</button>

                    <form action="productos/{{$producto->id}}">
                        {{csrf_field()}}

                        <input type="hidden"  name="_method" value="DELETE">
                        <button type="submit" class="btn btn-primary">Eliminar Producto</button>

                    </form>
                </form>
            </div>
            <div class="col"></div>


        </div>

    </div>

    </div>
@endsection

@section('pie')

@endsection
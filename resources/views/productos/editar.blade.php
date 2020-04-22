@extends('layout.plantilla')

@section('cabecera')
<h1>Editar registros</h1>
@endsection


@section('contenido')
    <div class="container">



        <div class="row">


            <div class="col"></div>
            <div class="col">



                {{ Form::model($producto->id, ['route' => ['productos.update', $producto],'method'=>'PUT'])}}


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



                    <button type="submit" class="btn btn-primary">Editar</button>




                {{Form::close()}}

                {{Form::reset('Borrar campos!' ,array_merge(['class' => 'btn btn-primary']))}}


                {{ Form::open(['route' => ['productos.destroy', $producto->id], 'method'=>'DELETE']) }}
                {{Form::submit('Eliminar' ,array_merge(['class' => 'btn btn-danger']))}}
                {{Form::close()}}





            </div>
            <div class="col"></div>


        </div>

    </div>


@endsection

@section('pie')

@endsection
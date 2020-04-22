@extends('layout.plantilla')

@section('cabecera')

    LEER INFORMACION
    @endsection

@section('contenido')


<div class="container">



    <div class="row">


        <div class="col"></div>
        <div class="col">
            <table class="table-bordered table">

                <tr>
                    <td>Nombre articulo</td>
                    <td>Seccion</td>
                    <td>Fecha</td>
                    <td>Precio</td>
                    <td>Pais origen</td>
                    <td>Imagen</td>

                </tr>
            @foreach($productos as $p)

                <tr>

                    <td><a href="{{route('productos.edit',$p->id)}}">{{$p->nombre_articulo}}</a> </td>
                    <td>{{$p->seccion}}</td>
                    <td>{{$p->fecha}}</td>
                    <td>{{$p->precio}}</td>
                    <td>{{$p->pais_origen}}</td>
                    <td><img src="images/{{$p->ruta}}" width="50"></td>

                </tr>




            @endforeach

            </table>

        </div>
        <div class="col">
            {{link_to_route('productos.create')}}

        </div>


    </div>

    </div>


@endsection

@section('pie')

@endsection
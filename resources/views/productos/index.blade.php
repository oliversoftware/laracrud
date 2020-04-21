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

                </tr>
            @foreach($productos as $p)

                <tr>

                    <td>{{$p->nombre_articulo}}</td>
                    <td>{{$p->seccion}}</td>
                    <td>{{$p->fecha}}</td>
                    <td>{{$p->precio}}</td>
                    <td>{{$p->pais_origen}}</td>
                </tr>




            @endforeach

            </table>

        </div>
        <div class="col"></div>


    </div>

    </div>


@endsection

@section('pie')

@endsection
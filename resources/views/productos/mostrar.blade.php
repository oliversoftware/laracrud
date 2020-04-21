@extends('layout.plantilla')

@section('cabecera')

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


                        <tr>

                            <td>{{$producto->nombre_articulo}}</td>
                            <td>{{$producto->seccion}}</td>
                            <td>{{$producto->fecha}}</td>
                            <td>{{$producto->precio}}</td>
                            <td>{{$producto->pais_origen}}</td>
                        </tr>






                </table>

            </div>
            <div class="col"></div>


        </div>

    </div>
@endsection

@section('pie')

@endsection
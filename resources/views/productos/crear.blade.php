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

            {{ Form::open(['url' => '/productos', 'method'=>'post','files'=> 'true']) }}


            <div class="form-group">
                {{ Form::label('nombre_articulo', 'Archivo') }}
                {{ Form::file('file') }}
            </div>
                <div class="form-group">
                    {{ Form::label('nombre_articulo', 'Nombre articulo') }}
                    {{ Form::text('nombre_articulo', ' ', array_merge(['class' => 'form-control'])) }}
                </div>

            <div class="form-group">
                {{ Form::label('seccion', 'Seccion') }}
                {{ Form::text('seccion', ' ', array_merge(['class' => 'form-control'])) }}
            </div>
            <div class="form-group">
                {{ Form::label('precio', 'precio') }}
                {{ Form::text('precio', ' ', array_merge(['class' => 'form-control'])) }}
            </div>
            <div class="form-group">
                {{ Form::label('fecha', 'fecha') }}
                {{ Form::text('fecha', ' ', array_merge(['class' => 'form-control'])) }}
            </div>

            <div class="form-group">
                {{ Form::label('pais_origen', 'Pais origen') }}
                {{ Form::text('pais_origen', ' ', array_merge(['class' => 'form-control'])) }}
            </div>


                {{csrf_field()}}

            {{Form::submit('Enviar!' ,array_merge(['class' => 'btn btn-primary']))}}

            {{Form::reset('Borrar campos!' ,array_merge(['class' => 'btn btn-primary']))}}
            {!! Form::close() !!}
        </div>
        <div class="col">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

             </div>


    </div>

    </div>

</div>
@endsection

@section('pie')

@endsection
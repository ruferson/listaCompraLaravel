@extends('layouts.master')

@section('content')

<div class="row">

    <div class="col-sm-4">

        <img src="https://picsum.photos/200/300/?random" style="height:200px"/>


    </div>
    <div class="col-sm-8">
        <h1 style="min-height:45px;margin:5px 0 10px 0">
            {{$producto[0]}}
        </h1>
        <h4 style="min-height:45px;margin:5px 0 10px 0">
            {{$producto[1]}}
        </h4>
        <p>
            Producto actualmente comprado
        </p>
        <a type="submit" class="btn btn-danger" role="button" href="#">Pendiente de compra</a>
        <br><br>
        <a type="submit" class="btn btn-default" role="button" href="{{ url('productos/edit/'.$id) }}">Editar</a>
        <br><br>
        <a type="submit" class="btn btn-default" role="button" href="{{ url('productos') }}">Volver al listado</a>

    </div>
</div>

@stop

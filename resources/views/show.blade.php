@extends('layouts.master')

@section('content')

<div class="row">

    <div class="col-sm-4">

        <img src="https://picsum.photos/200/300/?random" style="height:200px"/>


    </div>
    <div class="col-sm-8">
        <h1 style="min-height:45px;margin:5px 0 10px 0">
            {{$producto->nombre}}
        </h1>
        <h4 style="min-height:45px;margin:5px 0 10px 0">
            {{$producto->categoria}}
        </h4>
        <p>
            @php
                if ($producto->pendiente){
                    echo "Producto actualmente comprado";
                } else {
                    echo "Producto actualmente en venta";
                }
            @endphp
        </p>
        <a type="submit" class="btn btn-@php if ($producto->pendiente){
            echo "danger";
        } else {
            echo "success";
        } @endphp" role="button" href="#">
            @php
                if ($producto->pendiente){
                    echo "Comprado";
                } else {
                    echo "Comprar";
                }
            @endphp
        </a>
        <br><br>
        <a type="submit" class="btn btn-default" role="button" href="{{ url('productos/edit/'.$producto->id) }}">Editar</a>
        <br><br>
        <a type="submit" class="btn btn-default" role="button" href="{{ url('productos') }}">Volver al listado</a>

    </div>
</div>

@stop

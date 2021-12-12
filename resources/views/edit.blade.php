@extends('layouts.app')

@section('content')

<div class="row" style="margin-top:40px">
    <div class="offset-md-3 col-md-6">
       <div class="card">
          <div class="card-header text-center">
             Modificar producto
          </div>
          <div class="card-body" style="padding:30px">

             <form action="{{url('productos/edit/'.$id)}}" method="post">
                <input type="hidden" name="_method" value="PUT">
                @csrf

             <div class="form-group">
                <label for="title">Modificar título</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{$producto->nombre}}">
             </div>

             <div class="form-group">
                <label for="categ">Categoría</label>
                <input type="text" name="categoria" id="categoria" class="form-control" value="{{$producto->categoria}}">
             </div>

             <div class="form-group text-center">
                <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                    Modificar producto
                </button>
             </div>

             </form>

          </div>
       </div>
    </div>
 </div>


@stop


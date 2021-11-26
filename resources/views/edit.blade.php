@extends('layouts.master')

@section('content')

@extends('layouts.master')

@section('content')

<div class="row" style="margin-top:40px">
    <div class="offset-md-3 col-md-6">
       <div class="card">
          <div class="card-header text-center">
             Modificar producto
          </div>
          <div class="card-body" style="padding:30px">

             <form action="" method="post">
                <input id="" name="" type="hidden" value="PUT">
                @csrf

             <div class="form-group">
                <label for="title">Modificar título</label>
                <input type="text" name="title" id="title" class="form-control">
             </div>

             <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" name="precio" id="precio" class="form-control">
             </div>

             <div class="form-group">
                <label for="categ">Categoría</label>
                <input type="text" name="categ" id="categ" class="form-control">
             </div>

             <div class="form-group">
                <label for="imag">Imagen</label>
                <input type="text" name="imag" id="imag" class="form-control">
             </div>

             <div class="form-group">
                <label for="synopsis">Resumen</label>
                <textarea name="synopsis" id="synopsis" class="form-control" rows="3"></textarea>
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


@stop

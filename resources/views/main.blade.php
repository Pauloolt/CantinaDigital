@extends('layouts.new')
@section('test')
  <div class="container">
   <div class="jumbotron mt-3">
     <h1>Selecione a função</h1>
     <div class="rows">
       <a class="btn btn-lg btn-primary" href="{{route('order.index')}}" role="button">Balcão &raquo;</a>
       <a class="btn btn-lg btn-primary" href="{{route('kitchen')}}" role="button">Cozinha &raquo;</a>
       <a class="btn btn-lg btn-primary" href="{{route('show')}}" role="button">Mostrador &raquo;</a>

     </div>
   </div>
 </div>
@endsection

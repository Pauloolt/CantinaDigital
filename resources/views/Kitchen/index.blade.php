@extends('layouts.new')
@section('test')
  <style type="text/css">

  .jumbotron{
    margin: 0 auto;
    width: 70%;
    height: 80%;
    background: pink;
  }
  #botao{
    text-align: center;
    background: blue;
  }
  #botao2{
    text-align: center;
    background: red;
  }

</style>
<br>
      <div class="content">
            <div id ="bb" class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="container">
                          <div class="jumbotron">
                            <h1>Pedidos</h1>
                            <p><b> Nº</b> {{$order->number}} <br> <b> Hora</b> {{ $order['created_at']->format('i:s') }}<br> <b>Quantidade: </b> {{$order->quantity}}<br> <b>Descrição:</b>{{$order->order}}</p>
                            <br>
                            <form action="{{route('kitchen.update', [$order->id])}}" method="post">
                              {{csrf_field()}}
                              {{method_field('PUT')}}
                              {{-- <input type="text" name="" value="test"> --}}
                              <input type="submit" value="Proximo pedido" class="btn btn-success btn-lg">


                          </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection

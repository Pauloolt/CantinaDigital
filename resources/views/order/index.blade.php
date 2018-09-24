@extends('layouts.new')
@section('test')
  <div class="wrapper">
    <div class="sidebar" data-color="azure" data-image="https://st2.depositphotos.com/3283017/8720/v/950/depositphotos_87207810-stock-illustration-vintage-fast-food-logo.jpg">
      <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


      <div class="sidebar-wrapper">
        <ul class="nav">
          <li >
            <a href="{{route('order.create')}}">
              <i class="pe-7s-angle-right"></i>
              <p>Fazer pedidos</p>
            </a>
          </li>
          <li class="active">
            <a href="{{route('order.index')}}">
              <i class="pe-7s-note2"></i>
              <p>Tabela de pedidos</p>
            </a>
          </li>
          <li>
            <a href="{{route('home')}}">
              <i class="pe-7s-prev"></i>
              <p>Sair</p>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class="main-panel">
      <nav class="navbar navbar-default navbar-fixed">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

          </div>
        </nav>



        <div class="content">
          @include('inc.messages')
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="header">
                    <h4 class="title">Pedidos registrados</h4>
                    <p class="category">Todos os pedidos já feitos</p>
                  </div>
                  <div class="content table-responsive table-full-width">
                    <table class="table table-hover table-striped">
                      <thead>
                        <th>Senha</th>
                        <th>Nome</th>
                        <th>Quantidade</th>
                        <th>Descrição</th>
                        {{-- <th>Finalizado</th> --}}
                        <th>Delete</th>
                        <th>Modfy</th>
                      </thead>
                      <tbody>
                        @foreach ($orders as $order)
                          {{-- <li>Id: {{$order->id}}, Order: {{$order->order}}, Name: {{$order->name}}, Quantity: {{$order->quantity}}, Number: {{$order->number}}
                            <a href="{{route('order.edit', [$order->id])}}">edit</a>
                            <form action="{{route('order.destroy', [$order->id])}}" method="post" class="">
                            @method('DELETE')
                            @csrf
                            <input type="submit" name="" value="Remove" class="">
                            </form>
                         </li> --}}
                         <tr>
                           <td>{{$order->number}}</td>
                           <td>{{$order->name}}</td>
                           <td>{{$order->quantity}}</td>
                           <td>{{$order->order}}</td>
                           {{-- <td></td> --}}
                           <td><a href="{{route('order.edit', [$order->id])}}">edit</a></td>
                           <td><form action="{{route('order.destroy', [$order->id])}}" method="post" class="">
                           @method('DELETE')
                           @csrf
                           <i class="pe-7s-trash"></i>
                           <input type="submit" name="" value="Remove" style="background:none!important;color:inherit;border:none; padding:0!important;font: inherit; cursor: pointer;">
                           </form></td>
                         </tr>
                        @endforeach
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>


  </div>
</div>

@endsection

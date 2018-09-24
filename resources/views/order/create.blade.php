@extends('layouts.new')
@section('test')

  <style type="text/css">

      #mudance{
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center
  }

      #larg_card{
          width: 150%;

      }

      .logo{
          text-decoration:none;
      }

  </style>

<div class="wrapper">
<div class="sidebar" data-color="azure" data-image="https://st2.depositphotos.com/3283017/8720/v/950/depositphotos_87207810-stock-illustration-vintage-fast-food-logo.jpg">

<!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


  <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="active">
                <a href="{{route('order.create')}}">
                    <i class="pe-7s-user"></i>
                    <p>Fazer pedidos</p>
                </a>
            </li>
            <li>
                <a href="{{route('order.index')}}">
                    <i class="pe-7s-note2"></i>
                    <p>Tabela de pedidos</p>
                </a>
            </li>
            <li>
                <a href="{{route('home')}}">
                    <i class="pe-7s-note2"></i>
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
        <div id="mudance" class="container-fluid">
            <div class="row">
                <div  class="col-md-8">
                    <div id="larg_card" class="card">
                        <div class="header">
                            <h4 class="title" style="text-align: center">Registros</h4>
                        </div>
                        <div class="content">
                            <form action="{{route('order.store')}}" method="post">
                              {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Cliente</label>
                                            <input type="text" class="form-control" name="name" placeholder="Quem está pedindo">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Senha</label>
                                            <input type="number" class="form-control" name="number" placeholder="xx">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">    Quantidade</label>
                                            <input type="number" class="form-control" name="quantity" placeholder="Quantidade">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Descrição    </label>
                                            <textarea rows="5" class="form-control" name="order" placeholder="Tapioca com queijo de coalho e carne de charqaue"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-info btn-fill pull-center"  style="background-color: orange; border-color: pink;">Fazer pedido</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
             <!--   <div class="col-md-4">
                    <div class="card card-user">
                        <div class="image">
                            <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                        </div>
                        <div class="content">
                            <div class="author">
                                 <a href="#">
                                <img class="avatar border-gray" src="assets/img/faces/face-3.jpg" alt="..."/>

                                  <h4 class="title">Mike Andrew<br />
                                     <small>michael24</small>
                                  </h4>
                                </a>
                            </div>
                            <p class="description text-center"> "Lamborghini Mercy <br>
                                                Your chick she so thirsty <br>
                                                I'm in that two seat Lambo"
                            </p>
                        </div>-->
                        <hr>
                       <!-- <div class="text-center">
                            <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                            <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                            <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                        </div>-->
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
</div>
@endsection

@extends('layouts.new')
@section('test')
  <style type="text/css">

  .jumbotron{
    margin: 0 auto;
    width: 70%;
    height: 80%;
    background: red;
  }
  #botao{
    text-align: center;
    background: blue;
  }

</style>
<br>
      <div class="content">
            <div id ="bb" class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="container">
                          <div class="jumbotron">
                            <center><h1>Pedidos</h1></center>
                            <p><b> Nome: </b>{{$order->name}} <br> <b> Senha: </b>{{$order->number}}<br>
                            <br>
                          </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
  setTimeout(function(){
   location.reload();
 },5000);
</script>

@endsection

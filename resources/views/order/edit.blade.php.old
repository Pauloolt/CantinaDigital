<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="{{asset('js/app.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

    <title></title>
  </head>
  <body>

    <form action="{{route('order.update', [$order->id])}}" method="post">
      {{csrf_field()}}
      {{method_field('PUT')}}
      <div class="form-group">
        <label>Order</label>
        <input type="text" name="order" class="form-control" value="{{$order->order}}">
      </div>
      <div class="form-group">
        <label>Name<span class="fi-trash"></span></label>
        <input type="text" name="name" class="form-control" value="{{$order->name}}">
      </div>
      <div class="form-group">
        <label>Quantity<span class="fi-trash"></span></label>
        <input type="text" name="quantity" class="form-control" value="{{$order->quantity}}">
      </div>
      <div class="form-group">
        <label>Number<span class="fi-trash"></span></label>
        <input type="text" name="number" class="form-control" value="{{$order->number}}">
      </div>
      <input type="submit"  value="submit" class="btn btn-primary">
    </form>
  </body>

</html>

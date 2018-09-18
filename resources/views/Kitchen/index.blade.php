<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>{{$order->order}}, {{$order->id}}</p>

    <form action="{{route('kitchen.update', [$order->id])}}" method="post">
      {{csrf_field()}}
      {{method_field('PUT')}}
      {{-- <input type="text" name="" value="test"> --}}
      <input type="submit" value="done">
    </form>
  </body>
</html>

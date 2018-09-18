<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href="{{route('order.create')}}">Create Order</a>
    <a href="{{route('show')}}">Show</a>
    <a href="{{route('kitchen')}}">Kitchen</a>
    @foreach ($orders as $order)
      <li>Id: {{$order->id}}, Order: {{$order->order}}, Name: {{$order->name}}, Quantity: {{$order->quantity}}, Number: {{$order->number}}
        <a href="{{route('order.edit', [$order->id])}}">edit</a>
        <form action="{{route('order.destroy', [$order->id])}}" method="post" class="">
        @method('DELETE')
        @csrf
        <input type="submit" name="" value="Remove" class="">
        </form>
     </li>
    @endforeach
  </body>
</html>

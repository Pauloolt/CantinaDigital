<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>{{$order->name}}, {{$order->number}}</p>
    <script type="text/javascript">
      setTimeout(function(){
       location.reload();
      },1000);
   </script>
  </body>
</html>

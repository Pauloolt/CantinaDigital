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
    {{-- <h1>Create</h1>
    <form action="{{route('order.store')}}" method="post">
      {{csrf_field()}}
      <div class="form-group">
        <label></label>
        <input type="text" name="nome" class="form-control">
      </div>
      <button type="button" name="button"></button>
      <input type="submit"  value="submit" class="btn btn-primary" function="button">
    </form> --}}
    <form class="" action="index.html" method="post">
      {{-- {{csrf_field()}} --}}
      <ul id="demo"></ul>

    </form>

    <input type='button' onclick='changeText2()' value='Submit' />
  </body>
  <script>
  var list = document.getElementById('demo');
  var lastid = 0;

  function changeText2() {

    var content = $($.parseHTML('<div><input type="text" value="val" /></div>'));
    // (`
    //   <div class="">
    //     <label for="">Option</label>
    //     <input type="number" name="field['option']" value="">
    //     <label for="">Quant</label>
    //     <input type="number" name="field['quant']" value="">
    //   </div>
    // `);
    // content = $.parseHTML(content);
    var entry = document.createElement('li');
    entry.appendChild(document.createTextNode(content.find('div').html()));
    entry.setAttribute('id','item'+lastid);
    var removeButton = document.createElement('button');
    removeButton.appendChild(document.createTextNode("remove"));
    removeButton.setAttribute('onClick','removeName("'+'item'+lastid+'")');
    entry.appendChild(removeButton);
    lastid+=1;
    list.appendChild(entry);
  }


  function removeName(itemid){
    var item = document.getElementById(itemid);
    list.removeChild(item);
  }
  </script>
</html>

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KitchenController extends Controller
{
  public function index()
  {
    $order = \App\Stack::where('done', 0)
                  ->orderBy('created_at', 'asc')
                  ->first();

    if (isset($order)) {
      $order2 = \App\Order::find($order->id);
      return view('Kitchen.index')->with('order', $order2);
    }
    return view('Kitchen.blank');
  }
  public function update($id)
  {
    $order = \App\Stack::find($id);
    $order->done = True;
    $order->save();

    $delete = \App\Stack::find($id - 1);
    if (isset($delete)) {
      $delete->delete();
    }

    return redirect('kitchen');
  }
}

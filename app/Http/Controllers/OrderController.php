<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $orders = \App\Order::get();
      return view('order.index')->with('orders', $orders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('order.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        'order'  => 'required|string',
        'name' => 'required|min:5|max:255|string',
        'quantity' => 'required|numeric',
        'number'  => 'required|numeric',
      ]);

      // $order = $request->input('order');
      // $name = $request->input('name');
      // $quantity = $request->input('quantity');
      // $number = $request->input('number');

      $new = new \App\Order;
      $new->order = $request->input('order');
      $new->name = $request->input('name');
      $new->quantity = $request->input('quantity');
      $new->number = $request->input('number');
      $new->save();

      $new = new \App\Stack;
      $new->name = $request->input('name');
      $new->number = $request->input('number');
      $new->save();

      return redirect('/order')->with('success', 'Order added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $order = \App\Order::find($id);

      if (isset($order)) {
        return view('order.edit')->with('order', $order);
      }
      return redirect() ->to (route('order.index'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'order'  => 'required|string',
        'name' => 'required|min:5|max:255|string',
        'quantity' => 'required|numeric',
        'number'  => 'required|numeric',
      ]);

      $new = \App\Order::find($id);
      $new->order = $request->input('order');
      $new->name = $request->input('name');
      $new->quantity = $request->input('quantity');
      $new->number =$request->input('number');
      $new->save();

      $new = \App\Stack::find($id);
      $new->name = $request->input('name');
      $new->number = $request->input('number');
      $new->save();

      return redirect('/order')->with('success', 'Order updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $order = \App\Order::find($id);
      $order->delete();
      $order = \App\Stack::find($id);
      if(isset($order)){
        $order->delete();
      }

      return redirect('/order')->with('success', 'Order deleted');
    }
}

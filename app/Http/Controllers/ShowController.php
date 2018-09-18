<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{
  public function index()
  {
    $order = \App\Stack::where('done', 1)
                  ->orderBy('created_at', 'asc')
                  ->first();
    if (isset($order)) {
      return view('Show.index')->with('order', $order);
    }
    return view('Show.blank');
  }
}

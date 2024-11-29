<?php

namespace Todos\Controllers;

use Illuminate\Routing\Controller;

class TodoController extends Controller
{

  public function index()
  {
    return response()->view('todos', [
      'todos' => \Todos\Models\Todo::all()
    ]);
  }
}

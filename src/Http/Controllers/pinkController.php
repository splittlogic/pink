<?php

namespace splittlogic\pink\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

use splittlogic\pink\pink;

class pinkController extends Controller
{


  public function index ()
  {

    $content = 'This is splittlogic/pink'; 

    return view('pink::blank', ['content' => $content]);

  }


}

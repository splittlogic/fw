<?php

namespace splittlogic\fw\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

use splittlogic\fw\fw;

class fwController extends Controller
{


  public function index ()
  {

    $content = 'This is splittlogic/fw'; 

    fw::bootstrap('on');

    return fw::view('fw::blank', ['content' => $content]);

  }


}

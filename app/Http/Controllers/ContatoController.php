<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(){
        return View('site.contato');
    }
}

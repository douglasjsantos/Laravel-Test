<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2){
        // return View('site.teste', ['p1' => $p1, 'p2' => $p2]); ARRAY ASSOATIVO
        return View('site.teste', compact('p1', 'p2'));

    }
}

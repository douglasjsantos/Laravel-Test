<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        return View('app.fornecedor.index');
    }
}

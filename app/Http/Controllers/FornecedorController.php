<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores =
        [
            0 => ['nome' => 'Fornecedor 1', 'status' => 'S']
        ];
        return View('app.fornecedor.index', compact('fornecedores'));
    }
}

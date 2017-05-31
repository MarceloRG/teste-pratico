<?php

namespace App\Http\Controllers;

use App\Models\Vendedor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $vendedor = Vendedor::first();
        return view('welcome', compact('vendedor'));
    }
}

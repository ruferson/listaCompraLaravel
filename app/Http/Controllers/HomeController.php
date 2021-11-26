<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ProductoController;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function getHome(){
        return redirect()->action([ProductoController::class, 'getIndex']);
    }
}

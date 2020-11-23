<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
public function Cliente()
{
    $nombres = ['luisa herrera','yenci aguirre','yarlid hoyos','tatiana valencia'];
return view('Cliente.cliente', compact('nombres'));
}

}//End Class

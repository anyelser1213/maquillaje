<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $out = new \Symfony\Component\Console\Output\ConsoleOutput();
        
        $user=Auth::user();


        $out->writeln("Entramos en index de home,". $user);

        //Estas opciones son para trabajar con el menu principal
        $opcionPrincipal = "maquilladores";
        $opcionSegundaria = "index";
        $contexto = ['opcion1'=>$opcionPrincipal,
                     'opcion2'=>$opcionSegundaria
                    ];
        return view('home',$contexto);
    }
}

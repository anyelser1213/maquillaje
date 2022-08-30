<?php

namespace App\Http\Controllers;

use App\Models\Maquilladores;
use Illuminate\Http\Request;



class MaquilladoresController extends Controller
{
    //

    protected $maquillador;
    //public $maquillador;

    //Este maquilladores es del modelo 
    public function __construct()
    {
        $this->maquillador = new Maquilladores();


        //$out = new \Symfony\Component\Console\Output\ConsoleOutput();
        //$out->writeln("Estamos en el contructor==> ".Maquilladores::all());
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        
        $prueba = new Maquilladores();
        $jaja = $prueba->obtenerMaquilladores();

        $out = new \Symfony\Component\Console\Output\ConsoleOutput();
        $out->writeln("Estamos en el index del controlador de maquilladores==> ".Maquilladores::all());

        //Estas opciones son para trabajar con el menu principal
        $opcionPrincipal = "maquilladores";
        $opcionSegundaria = "index";
        $contexto = ['maquilladores'=>Maquilladores::all(),
                     'opcion1'=>$opcionPrincipal,
                     'opcion2'=>$opcionSegundaria
                    ];
        return view('maquilladores.lista', $contexto);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {

        return view('maquilladores.crear');

    }

    public function listar()
    {

        
        $out = new \Symfony\Component\Console\Output\ConsoleOutput();
        $out->writeln("Estamos en el listar del controlador==> maquillador");

        $opcionPrincipal = "maquilladores";
        $opcionSegundaria = "listar";
        $contexto = ['maquilladores'=>Maquilladores::all(),
                     'opcion1'=>$opcionPrincipal,
                     'opcion2'=>$opcionSegundaria
                    ];

        return view('maquilladores.lista',$contexto);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $maquillador = new Maquilladores($request->all());
        $maquillador->save();
        return redirect()->action([MaquilladorController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function mostrar($id)
    {
        $maquillador = $this->maquillador->obtenerMaquilladorPorId($id);
        return view('maquilladores.mostrar', ['maquilladores' => $maquillador]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        $maquillador = $this->maquillador->obtenerMaquilladorPorId($id);
        return view('maquillador.editar', ['maquilladores' => $maquillador]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actualizar(Request $request, $id)
    {
        $maquillador = Maquilladores::find($id);
        $maquillador->fill($request->all());
        $maquillador->save();
        return redirect()->action([MaquilladorController::class, 'actualizar']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destruir($id)
    {
        $maquillador = Maquilladores::find($id);
        $maquillador->delete();
        return redirect()->action([MaquilladorController::class, 'destruir']);
    }

}

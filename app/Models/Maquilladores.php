<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maquilladores extends Model
{
    use HasFactory;

    //Esto es para definir con que tabla conectamos este modelo
    protected $table = "maquilladores";

    //Esta Propiedad es para visualizar los campos de la tabla en las consultas sql
    protected $fillable = ['nombre', 'apellido', 'telefono', 'cedula'];

    //La propiedad hidden es para ocultar  los campos  de la tabla en las consultas
    protected $hidden = ['id'];

    public $timestamps = false;


    public function obtenerMaquilladores()
    {
        return Maquilladores::all();
    }

    //Este metodo es para obtener un determinado maquillador
    public function obtenerMaquilladorPorId($id)
    {
        return Maquilladores::find($id);
    }


}//Fin del modelo de maquillador

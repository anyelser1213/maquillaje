<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfiles extends Model
{
    use HasFactory;


    protected $fillable = ['nombre'];
    protected $table = "perfiles";
    public $timestamps;


    public function TodosLosPerfiles(){

        return Perfiles::all();
    }
}

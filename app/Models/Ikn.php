<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Ikn extends Model
{
    protected $table = 'programa_ensenanza';
    protected $primaryKey = 'id';

    // Laravel por defecto usa timestamps (created_at, updated_at)
    public $timestamps = false;

    protected $fillable = [
        // agrega tus columnas aquí si vas a insertar/editar
    ];

    // 🔹 Equivalente a findAll()
    public function get_programa_ensenanza()
    {
        return $this->get(); // SELECT * FROM programa_ensenanza
    }

    // 🔹 Tu JOIN adaptado
    public function get_detalle_cinturon($cinturon_id)
    {
        return DB::table('detalle_programa_ensenanza as d')
            ->select('d.*', 'c.nombre_cinturon', 'c.path_imagen')
            ->join('programa_ensenanza as c', 'c.id_cinturon', '=', 'd.id_cinturon_fk')
            ->where('d.id_cinturon_fk', $cinturon_id)
            ->first(); // equivalente a getRowArray()
    }
}
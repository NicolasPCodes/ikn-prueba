<?php

namespace App\Http\Controllers;

use App\Models\Ikn as IknModel;
use Illuminate\Http\Request;

class Ikn extends Controller
{
    protected $iknModel;

    public function __construct()
    {
        $this->iknModel = new IknModel();
    }

    public function index()
    {
        return view('inicio_view');
    }

    public function programaEnsenanza()
    {
        $data['programa_ensenanza'] = $this->iknModel->get_programa_ensenanza();

        return view('programa_ensenanza_view', $data);
    }

    public function detalleCinturon($id_cinturon)
    {
        $data = $this->iknModel->get_detalle_cinturon($id_cinturon);

        return response()->json($data);
    }
}
<?php

namespace App\Controllers;
use App\Models\PreguntasModel;

class Home extends BaseController
{
    public function index() //: string
    {
        $data['title'] = 'Inicio';

        $PreguntasModel = new PreguntasModel();
        $data['pregunta'] = $PreguntasModel->getSigPregunta(1,11);

        //echo "<pre>"; var_dump($data['pregunta']);

        return view('Home', $data);
    }
}

<?php

namespace App\Controllers;

class Ubicacion extends BaseController
{
    public function index(): string
    {
        $data['title'] = 'Mi ubicación';
        return view('Ubicacion', $data);
    }
}

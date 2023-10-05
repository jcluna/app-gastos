<?php

class movimientosController extends Controller
{
    function __construct()
    {
    }

    function index()
    {
        $data = ['title' => 'Mis Movimientos'];
        View::render('index', $data);
    }
}

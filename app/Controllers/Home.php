<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('sidebar').view('topbar').view('dashboard');
    }

    public function novedades(): string
    {
        return view('sidebar').view('topbar').view('novedades');
    }

    public function como_participar(): string
    {
        return view('sidebar').view('topbar').view('como_participar');
    }

    public function calendario(): string
    {
        return view('sidebar').view('topbar').view('calendario');
    }

    public function ranking(): string
    {
        return view('sidebar').view('topbar').view('ranking');
    }

    public function rating(): string
    {
        return view('sidebar').view('topbar').view('rating');
    }

    public function autoridades(): string
    {
        return view('sidebar').view('topbar').view('autoridades');
    }
    
    public function puntaje_rating(): string
    {
        return view('sidebar').view('topbar').view('puntaje_rating');
    }

    public function categorias_rating(): string
    {
        return view('sidebar').view('topbar').view('categorias_rating');
    }

    public function contacto(): string
    {
        return view('sidebar').view('topbar').view('contacto');
    }

    public function donde_jugar(): string
    {
        return view('sidebar').view('topbar').view('donde_jugar');
    }

    public function historia(): string
    {
        return view('sidebar').view('topbar').view('historia');
    }

    public function reglamento(): string
    {
        return view('sidebar').view('topbar').view('reglamento');
    }

    public function gomas_aprobadas(): string
    {
        return view('sidebar').view('topbar').view('gomas_aprobadas');
    }

    public function declaracion_jurada(): string
    {
        return view('sidebar').view('topbar').view('declaracion_jurada');
    }

    public function reglamento_tecnico(): string
    {
        return view('sidebar').view('topbar').view('reglamento_tecnico');
    }

    public function tribunal_disciplina(): string
    {
        return view('sidebar').view('topbar').view('tribunal_disciplina');
    }

    public function reglamento_abtm(): string
    {
        return view('sidebar').view('topbar').view('reglamento_abtm');
    }

    public function inscripcion(): string
    {
        return view('sidebar').view('topbar').view('inscripcion');
    }

    public function ver_inscriptos(): string
    {
        return view('sidebar').view('topbar').view('ver_inscriptos');
    }

    public function perfil(): string
    {
        return view('sidebar').view('topbar').view('perfil');
    }

    public function resultados(): string
    {
        return view('sidebar').view('topbar').view('resultados');
    }

    public function grafico(): string
    {
        return view('sidebar').view('topbar').view('grafico');
    }
}

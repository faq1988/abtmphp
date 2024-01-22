<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/novedades', 'Home::novedades');
$routes->get('/como_participar', 'Home::como_participar');
$routes->get('/calendario', 'Home::calendario');
$routes->get('/ranking', 'Home::ranking');
$routes->get('/rating', 'Home::rating');
$routes->get('/autoridades', 'Home::autoridades');
$routes->get('/puntaje_rating', 'Home::puntaje_rating');
$routes->get('/categorias_rating', 'Home::categorias_rating');
$routes->get('/contacto', 'Home::contacto');
$routes->get('/donde_jugar', 'Home::donde_jugar');
$routes->get('/historia', 'Home::historia');
$routes->get('/reglamento', 'Home::reglamento');
$routes->get('/gomas_aprobadas', 'Home::gomas_aprobadas');
$routes->get('/declaracion_jurada', 'Home::declaracion_jurada');
$routes->get('/reglamento_tecnico', 'Home::reglamento_tecnico');
$routes->get('/tribunal_disciplina', 'Home::tribunal_disciplina');
$routes->get('/reglamento_abtm', 'Home::reglamento_abtm');
$routes->get('/inscripcion', 'Home::inscripcion');
$routes->get('/ver_inscriptos', 'Home::ver_inscriptos');
$routes->get('/perfil', 'Home::perfil');
$routes->get('/resultados', 'Home::resultados');
$routes->get('/grafico', 'Home::grafico');

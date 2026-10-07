<?php

use CodeIgniter\Router\RouteCollection;



/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/Home/callviewjenisusaha', 'Home::callviewjenisusaha');
$routes->get('/Home/callviewdatakaryawan', 'Home::callviewdatakaryawan');
$routes->get('/Home/callviewdatakriteria', 'Home::callviewdatakriteria');
$routes->get('/Home/callviewdatabobot', 'Home::callviewdatabobot');
$routes->get('/Home/callviewhitung', 'Home::callviewhitung');

$routes->get('/Home/callviewnormalisasi', 'Home::callviewnormalisasi');
$routes->get('/Home/callviewranking', 'Home::callviewranking');
// $routes->get('/home/callviewkeputusan', 'Home::callviewkeputusan');
$routes->get('/Home/callviewkeputusan', 'Home::callviewkeputusan');
// $routes->get('/Home/callviewmatrikkeputusan', 'Home::callviewmatrikkeputusan');
$routes->get('/home/viewmatrikkeputusan', 'Home::viewmatrikkeputusan');

//jenis usaha
$routes->get('/home/tambahJenisUsaha', 'Home::tambahJenisUsaha');
$routes->post('/home/simpanJenisUsaha', 'Home::simpanJenisUsaha');
$routes->get('/home/formEditJenisUsaha/(:num)', 'Home::formEditJenisUsaha/$1');
$routes->post('/home/editJenisUsaha/(:num)', 'Home::editJenisUsaha/$1');
$routes->get('/home/deleteJenisUsaha/(:num)', 'Home::deleteJenisUsaha/$1');
$routes->get('/home/callviewjenisusaha', 'Home::callviewjenisusaha');

// Bobot
$routes->get('/home/tambahBobot', 'Home::tambahBobot');
$routes->post('/home/simpanBobot', 'Home::simpanBobot');
$routes->get('/home/formEditBobot/(:num)', 'Home::formEditBobot/$1');
$routes->post('/home/editBobot/(:num)', 'Home::editBobot/$1');
$routes->post('/home/deleteBobot/(:num)', 'Home::deleteBobot/$1');
$routes->get('/home/callviewdatabobot', 'Home::callviewdatabobot');

//karyawan
// $routes->get('/home/tambahKaryawan', 'Home::tambahKaryawan');
// $routes->post('/home/simpanKaryawan', 'Home::simpanKaryawan');
// $routes->get('/home/formEditKaryawan/(:num)', 'Home::formEditKaryawan/$1');
// $routes->post('/home/editKaryawan/(:num)', 'Home::editKaryawan/$1');
// $routes->post('/home/deleteKaryawan/(:num)', 'Home::deleteKaryawan/$1');
// $routes->get('/home/callviewdatakaryawan', 'Home::callviewdatakaryawan');

// karyawan
$routes->get('/home/formtambah', 'Home::tambahKaryawan');
// $routes->post('/home/simpanKaryawan', 'Home::simpanKaryawan');
// $routes->get('/home/formEditKaryawan/(:num)', 'Home::formEditKaryawan/$1');
$routes->post('/home/editKaryawan/(:num)', 'Home::editKaryawan/$1');
$routes->post('/home/deleteKaryawan/(:num)', 'Home::deleteKaryawan/$1');
$routes->get('/home/callviewdatakaryawan', 'Home::callviewdatakaryawan');
// app/Config/Routes.php
// $routes->get('/tambahKaryawan', 'Home::tambahKaryawan');
$routes->post('/simpanKaryawan', 'Home::simpanKaryawan');

//kriteria
$routes->get('/home/tambahKriteria', 'Home::tambahKriteria');
$routes->post('/home/simpanKriteria', 'Home::simpanKriteria');
$routes->get('/home/formEditKriteria/(:num)', 'Home::formEditKriteria/$1');
$routes->post('/home/editKriteria/(:num)', 'Home::editKriteria/$1');
$routes->get('/home/deleteKriteria/(:num)', 'Home::deleteKriteria/$1');
$routes->get('/home/callviewkriteria', 'Home::callviewkriteria');


$routes->get('/home/tambahMatriksKeputusan', 'Home::tambahMatriksKeputusan');
$routes->get('/home/viewmatrikkeputusan', 'Home::viewmatrikkeputusan');
$routes->post('/home/simpanMatrikKeputusan', 'Home::simpanMatrikKeputusan');
$routes->get('/home/hapusMatrikKeputusan/(:num)', 'Home::hapusMatrikKeputusan/$1');
$routes->get('home/editMatrikKeputusan/(:num)', 'Home::editMatrikKeputusan/$1');
$routes->post('home/updateMatrikKeputusan', 'Home::updateMatrikKeputusan');



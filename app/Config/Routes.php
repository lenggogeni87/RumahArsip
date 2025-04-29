<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::index');
$routes->get('/login', 'Home::login');
$routes->get('/regis', 'Home::regis');

$routes->get('/table-data-umum', 'DataUmum::index');
$routes->get('/add-data-umum', 'DataUmum::add');
$routes->post('/store-data-umum', 'DataUmum::store');
$routes->get('/edit-data-umum', 'DataUmum::edit');
$routes->post('/update-data-umum/(:num)', 'DataUmum::update/$1');

$routes->get('/table-faktor-risiko', 'FaktorRisiko::index');
$routes->get('/add-faktor-risiko', 'FaktorRisiko::add');
$routes->get('/edit-faktor-risiko', 'FaktorRisiko::edit');

#$routes->get('/table-penilaian-risiko', 'PenilaianRisiko::index');
$routes->get('/table-penilaian-risiko', 'PenilaianRisiko::index_satker');
$routes->get('/add-penilaian-risiko', 'PenilaianRisiko::add_satker');
$routes->get('/edit-penilaian-risiko', 'PenilaianRisiko::edit_satker');

$routes->get('/table-profil-risiko', 'ProfilRisiko::index');
$routes->get('/add-profil-risiko', 'ProfilRisiko::add');
$routes->get('/edit-profil-risiko', 'ProfilRisiko::edit');
$routes->get('/data-profil-risiko', 'ProfilRisiko::data');

$routes->get('/table-pemantauan-risiko', 'PemantauanRisiko::index');
$routes->get('/add-pemantauan-risiko', 'PemantauanRisiko::add');
$routes->get('/edit-pemantauan-risiko', 'PemantauanRisiko::edit');
$routes->get('/data-pemantauan-risiko', 'PemantauanRisiko::data');

$routes->get('/table-manajemen-pengguna', 'ManajemenPengguna::index');
$routes->get('/add-manajemen-pengguna', 'ManajemenPengguna::add');
#$routes->get('/edit-manajemen-pengguna', 'ManajemenPengguna::edit');
$routes->get('edit-manajemen-pengguna/(:num)', 'ManajemenPengguna::edit/$1');
$routes->post('/update-manajemen-pengguna/(:num)', 'ManajemenPengguna::update/$1');


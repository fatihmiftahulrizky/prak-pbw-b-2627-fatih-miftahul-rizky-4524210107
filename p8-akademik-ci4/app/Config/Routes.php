
<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

$routes->get('/', 'Home::index');

// Menampilkan dan menambahkan mahasiswa
$routes->get('/mahasiswa', 'MahasiswaController::index');
$routes->get('/mahasiswa/tambah', 'MahasiswaController::create');
$routes->post('/mahasiswa/simpan', 'MahasiswaController::store');

// Mengubah data mahasiswa
$routes->get('/mahasiswa/edit/(:num)', 'MahasiswaController::edit/$1');
$routes->post('/mahasiswa/update/(:num)', 'MahasiswaController::update/$1');

// Menghapus data mahasiswa
$routes->get('/mahasiswa/hapus/(:num)', 'MahasiswaController::delete/$1');
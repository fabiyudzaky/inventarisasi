<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Inventarisasi');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');

// route untuk homepage
$routes->get('/', 'Inventarisasi::index');

/*route jika ingin masuk pilih ruangan.
pindah-ruangan adalah url slug untuk pindah*/
$routes->get('/Inventarisasi/pindah-ruangan', 'Inventarisasi::pindah');

$routes->get('/Inventarisasi/pindah', 'Inventarisasi::pindah');

/*route jika ingin masuk menu ruangan bmu.
ruangan-bmu adalah url slug untuk ruanganBMU
*/
$routes->get('/Inventarisasi/ruangan-bmu', 'Inventarisasi::ruanganBMU');

$routes->get('/Inventarisasi/ruanganBMU', 'Inventarisasi::ruanganBMU');


//========================================================================
//====================Ruangan Customer Service============================
//========================================================================

/*route jika ingin masuk ruangan customer service.
customer-service adalah url slug untuk customerService
*/
$routes->get('/Inventarisasi/customer-service', 'Inventarisasi::customerService');

$routes->get('/Inventarisasi/customerService', 'Inventarisasi::customerService');

/*route jika ingin menambahkan data.
input-cs adalah url slug untuk inputCS
*/
// $routes->get('/Inventarisasi/input-cs', 'Inventarisasi::inputCS');

$routes->get('/Inventarisasi/inputCS', 'Inventarisasi::inputCS');

/*route jika ingin mengubah data.
edit-cs adalah url slug untuk editCS
*/
// $routes->get('/Inventarisasi/edit-cs', 'Inventarisasi::editCS');

$routes->get('/Inventarisasi/editCS', 'Inventarisasi::editCS');

/*route untuk menangkap isi dari form*/
$routes->get('/Inventarisasi/saveCS', 'Inventarisasi::saveCS');

//========================================================================
//====================Ruangan Akuntansi===================================
//========================================================================

/*route jika ingin masuk ruangan customer service.
customer-service adalah url slug untuk customerService
*/
$routes->get('/Inventarisasi/akuntansi', 'Inventarisasi::akuntansi');


/*route jika ingin menambahkan data.
input-cs adalah url slug untuk inputCS
*/
// $routes->get('/Inventarisasi/input-akuntansi', 'Inventarisasi::inputAcct');

$routes->get('/Inventarisasi/inputAcct', 'Inventarisasi::inputAcct');

/*route jika ingin mengubah data.
edit-cs adalah url slug untuk editCS
*/
// $routes->get('/Inventarisasi/edit-akuntansi', 'Inventarisasi::editAcct');

$routes->get('/Inventarisasi/editAcct', 'Inventarisasi::editAcct');

/*route untuk menangkap isi dari form*/
$routes->get('/Inventarisasi/saveAcct', 'Inventarisasi::saveAcct');


//========================================================================
//====================Ruangan Produksi===================================
//========================================================================

/*route jika ingin masuk ruangan customer service.
customer-service adalah url slug untuk customerService
*/
$routes->get('/Inventarisasi/produksi', 'Inventarisasi::produksi');


/*route jika ingin menambahkan data.
input-cs adalah url slug untuk inputCS
*/
// $routes->get('/Inventarisasi/input-produksi', 'Inventarisasi::inputProduksi');

$routes->get('/Inventarisasi/inputProduksi', 'Inventarisasi::inputProduksi');

/*route jika ingin mengubah data.
edit-cs adalah url slug untuk editCS
*/
$routes->get('/Inventarisasi/edit-produksi', 'Inventarisasi::editProduksi');

$routes->get('/Inventarisasi/editProduksi', 'Inventarisasi::editProduksi');

/*route untuk menangkap isi dari form*/
$routes->get('/Inventarisasi/saveProduksi', 'Inventarisasi::saveProduksi');











//routes ketika fungsi delete sudah bisa diterapkan
// $routes->delete('/Inventarisasi/(:num)', 'Inventarisasi::delete/$1');



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

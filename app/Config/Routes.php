<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'loginCont::index');
$routes->get('/login', 'loginCont::index'); //Login page route.
$routes->get('/register', 'RegisterCont::index'); //Login page route.
$routes->post('/signIn', 'loginCont::signIn'); //signIn route.
$routes->post('/signUp', 'registerCont::signUp'); //signUp route.
$routes->get('/login', 'loginCont::logOut'); //signUp route.

$routes->get('databases/home', 'Home::index'); //Home page route.

$routes->get('databases/misc', 'MiscCont::misc'); //Miscellaneous page route.
$routes->get('forms/miscform', 'MiscCont::miscform');
$routes->post('forms/add', 'MiscCont::add'); //miscellaneous add data route.
$routes->get('/delete/(:num)', 'MiscCont::delete/$1'); //miscellaneous delete data route.

$routes->get('databases/drums', 'DrumsCont::drums'); //Drums page route.
$routes->get('forms/drumsform', 'DrumsCont::drumsform');
$routes->post('forms/addDrums', 'DrumsCont::addDrums'); //Drums add data route.
$routes->get('/delete2/(:num)', 'DrumsCont::delete2/$1'); //Drums delete data route.

$routes->get('databases/assy', 'AssyCont::assy'); //Assembly page route.
$routes->get('forms/assyform', 'AssyCont::assyform');
$routes->post('forms/addAssy', 'AssyCont::addAssy'); //Assembly add data route 
$routes->get('/delete3/(:num)', 'AssyCont::delete3/$1'); //Assembly delete data route.

$routes->get('databases/paint', 'PaintCont::paint'); //Paint page route.
$routes->get('forms/paintform', 'PaintCont::paintform');
$routes->post('forms/addPaint', 'PaintCont::addPaint'); //Paint add data route.
$routes->get('/delete4/(:num)', 'PaintCont::delete4/$1'); //Paint delete data route.

$routes->get('databases/prep', 'PrepCont::prep'); //Preparation page route.
$routes->get('forms/prepform', 'PrepCont::prepform');
$routes->post('forms/addPrep', 'PrepCont::addPrep'); //Preparation add data route 
$routes->get('/delete5/(:num)', 'PrepCont::delete5/$1'); //Preparation delete data route

$routes->get('databases/paint2', 'Paint2Cont::paint2'); //Paint2 page route.
$routes->get('forms/paint2form', 'Paint2Cont::paint2form');
$routes->post('forms/addPaint2', 'Paint2Cont::addPaint2'); //Paint2 add data route.
$routes->get('/delete6/(:num)', 'Paint2Cont::delete6/$1'); //Paint2 delete data route.

$routes->get('databases/shipping', 'ShippingCont::shipping'); //Shipping page route.
$routes->get('forms/shippingform', 'ShippingCont::shippingform');
$routes->post('forms/addShipping', 'ShippingCont::addShipping'); //Shipping add data route.
$routes->get('/delete7/(:num)', 'ShippingCont::delete7/$1'); //Shipping delete data route.

$routes->get('dashboard/inicio', 'dashboardCont::index');
$routes->get('dashboard/get_defect_data.php', 'dashboardCont::index');

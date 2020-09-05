<?php

$routes->group('/', function($routes){
	$routes->get('register','Authentication::register',['as'=>'register']);
	$routes->post('register','Authentication::attRegister');

	$routes->get('login','Authentication::login',['as'=>'login']);
	$routes->post('login','Authentication::attLogin');

	$routes->get('forgot','Authentication::forgot',['as'=>'forgot']);
	$routes->post('forgot','Authentication::attForgot');

});
<?php

$routes->get('/',function(){
	return view("Rudi\\Views\\home");
});

$routes->group('/',['namespace'=>'Rudi\Controllers'], function($routes){
	$routes->get('register','Authentication::register',['as'=>'register']);
	$routes->post('register','Authentication::attRegister');

	$routes->get('login','Authentication::login',['as'=>'login']);
	$routes->post('login','Authentication::attLogin');

	$routes->get('forgot-password','Authentication::forgot',['as'=>'forgot']);
	$routes->post('forgot-password','Authentication::attForgot');

});
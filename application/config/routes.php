<?php

return [
	//Main Controller
	'' => [
		'controller' => 'main',
		'action' => 'index',
	],

	'about' => [
		'controller' => 'main',
		'action' => 'about',
	],

	'contact' => [
		'controller' => 'main',
		'action' => 'contact',
	],
	'post' => [
		'controller' => 'main',
		'action' => 'post',
	],

	//Admin Controller
	'admin/index' => [
		'controller' => 'admin',
		'action' => 'index',
	],
	'admin/post' => [
		'controller' => 'admin',
		'action' => 'post',
	],
	'admin/login' => [
		'controller' => 'admin',
		'action' => 'login',
	],
	'admin/logout' => [
		'controller' => 'admin',
		'action' => 'logout',
	],
	'admin/edit' => [
		'controller' => 'admin',
		'action' => 'edit',
	],
	'admin/add' => [
		'controller' => 'admin',
		'action' => 'add',
	],
	'admin/delete' => [
		'controller' => 'admin',
		'action' => 'delete',
	],

];
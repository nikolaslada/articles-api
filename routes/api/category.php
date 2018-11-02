<?php

$api->group(['middleware' => 'api.auth'], function () use ($api) {
	$api->get('/category', [
		'as'   => 'api.tag.index',
		'uses' => 'CategoryController@index'
	]);
	$api->get('/category/{tag}', [
		'as'   => 'api.category.show',
		'uses' => 'CategoryController@show'
	]);
});

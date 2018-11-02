<?php

$api->group(['middleware' => 'api.auth'], function () use ($api) {
	$api->get('/article', [
		'as'   => 'api.article.index',
		'uses' => 'ArticleController@index'
	]);
	$api->get('/article/{article}', [
		'as'   => 'api.article.show',
		'uses' => 'ArticleController@show'
	]);
});

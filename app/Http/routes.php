<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
  $client = new \GuzzleHttp\Client();
  $res = $client->request('GET', 'https://api.github.com/repos/guzzle/guzzle');
  //return $res->getStatusCode();
  // 200
  //echo $res->getHeaderLine('content-type');
  // 'application/json; charset=utf8'
  return $res->getBody();
  // '{"id": 1420053, "name": "guzzle", ...}'
});

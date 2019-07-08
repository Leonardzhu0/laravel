<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

$html = <<<EOF
<html>
<head>
<style>
h1 {
    font-size: 100pt;
    text-align: center;
    color: blue;
}
</style>
</head>
</html>
<body>
<h1>HELLOOOOO</h1>
<p>this is example</p>
</body>
EOF;

Route::get('hello', function()use($html){
    return $html;
});


Route::get('helo/{msg1}/{msg2}', function($msg1, $msg2){

$html1 = <<<EOF
<html>
<head>
<style>
h1 {
    font-size: 100pt;
    text-align: center;
    color: blue;
}
</style>
</head>
</html>
<body>
<h1>HELLOOOOO</h1>
<p>this is {$msg1} and {$msg2} example</p>
</body>
EOF;


    return $html1;
});


Route::get('helo/{msg1?}', function($msg1='no message'){

$html1 = <<<EOF
<html>
<head>
<style>
h1 {
    font-size: 100pt;
    text-align: center;
    color: blue;
}
</style>
</head>
</html>
<body>
<h1>HELLOOOOO</h1>
<p>this is {$msg1} and example</p>
</body>
EOF;


    return $html1;
});

// Route::get('helllo/{id?}/{pass?}', 'HelloController@index');

Route::get('hello', 'HelloController@index');
Route::get('hello/other', 'HelloController@other');

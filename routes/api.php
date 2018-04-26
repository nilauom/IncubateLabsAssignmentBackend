<?php

use Dingo\Api\Routing\Router;

/** @var Router $api */
$api = app(Router::class);

$api->version('v1', function (Router $api) {
       $api->get('/a',function(){
        return "ela";
       });
    $api->group(['prefix' => 'auth'], function(Router $api) {
        $api->post('signup', 'App\\Api\\V1\\Controllers\\SignUpController@signUp');
        $api->post('login', 'App\\Api\\V1\\Controllers\\LoginController@login');
    });

    $api->group(['middleware' => 'jwt.auth'], function(Router $api) {
        $api->post('/logout','App\\Api\\V1\\Controllers\\LoginController@logout');       
        $api->group(['prefix'=>'me'],function(Router $api){
            $api->post('/addFav','App\\Api\\V1\\Controllers\\UserController@addFav');
            $api->get('/getFav','App\\Api\\V1\\Controllers\\UserController@getFav');
            $api->post('/deleteImage/{id}','App\\Api\\V1\\Controllers\\UserController@deleteImage');
            $api->post('/deleteComment/{id}','App\\Api\\V1\\Controllers\\UserController@deleteComment');
            $api->post('/addComment/{id}','App\\Api\\V1\\Controllers\\UserController@addComment');

        });

    });
});

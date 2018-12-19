<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['prefix' => 'api'], function(){ //Criei um grupo de rotas e subgrupo para melhor identificalas, sendo que se futuramente necessitarmos para API podemos usar

    Route::group(['prefix' => 'nw'], function(){

        Route::get('/all',['as'=>'api.all', 'uses' => 'NwController@allPersona']); //Listando todos os personagens na tela de controle GET

        Route::get('/', ['as'=> 'api.home', 'uses' => 'NwController@homeAllPersona']); // Listando todos os personagens na tela home GET 

        Route::get('/add',['as'=> 'api.adicionar', 'uses' => 'NwController@addPersona']); // Direcionando para formulário de cadastro GET

        Route::get('{id}',['as'=> 'api.persona', 'uses' => 'NwController@getPersona']); // Obtendo 1 personagem GET

        Route::put('/update/{id}',['as'=> 'api.update', 'uses' => 'NwController@updatePersona']); // Atualizando personagem PUT

        Route::get('/edit/{id}',['as'=> 'api.edit', 'uses' => 'NwController@editPersona']); // Direcionando para formulário de edição GET

        Route::post('',['as'=> 'api.save', 'uses' => 'NwController@savePersona']); // Inserindo personagem no banco POST

        Route::delete('{id}',['as'=> 'api.delete', 'uses' => 'NwController@detelePersona']); // Removendo personagem DELETE

        /**
         * GET - api/nw/
         * GET - api/nw/{id}
         * POST - api/nw/
         * put - api/nw/
         * 
         */

    });
});

Route::get('/', ['as'=> 'home', 'uses' => 'NwController@homeAllPersona']);






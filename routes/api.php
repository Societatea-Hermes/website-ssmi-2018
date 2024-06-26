<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('/team', 'TeamController@saveTeam');
Route::get('/teams', 'TeamController@getTeams');
Route::get('/team/members/{team_id}', 'TeamController@getTeamMembers');
Route::get('/backoffice','LogInController@login');

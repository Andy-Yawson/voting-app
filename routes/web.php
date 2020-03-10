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

Route::get('/monitor-progress', 'MonitorController@monitor')->name('web.monitor');
Route::get('/election-result', 'MonitorController@election')->name('web.end.election');
//=============API data==========
Route::get('/get-president', 'MonitorController@presidentData')->name('web.president.data');
Route::get('/get-treasurer', 'MonitorController@treasurerData')->name('web.treasurer.data');
Route::get('/get-secretary', 'MonitorController@secretaryData')->name('web.secretary.data');
Route::get('/get-organizer', 'MonitorController@organizerData')->name('web.organizer.data');
Route::get('/get-sport', 'MonitorController@sportsData')->name('web.sports.data');


Route::get('/', 'WebController@welcome')->name('web.home');
Route::get('/president', 'WebController@president')->name('web.president');
Route::get('/treasurer', 'WebController@treasurer')->name('web.treasurer');
Route::get('/secretary', 'WebController@secretary')->name('web.secretary');
Route::get('/sports', 'WebController@sports')->name('web.sports');
Route::get('/organizing-secretary', 'WebController@organizing')->name('web.organizing');

Route::post('/', 'VoteController@verify')->name('app.verify');
Route::get('/president/vote/{id}/{vote}', 'VoteController@votePresident')->name('app.president.vote');
Route::post('/treasurer/vote', 'VoteController@voteTreasurer')->name('app.treasurer.vote');
Route::post('/secretary/vote', 'VoteController@voteSecretary')->name('app.secretary.vote');
Route::get('/organizer/vote/{id}/{vote}', 'VoteController@voteOrganizer')->name('app.organizer.vote');
Route::post('/sport/vote', 'VoteController@voteSport')->name('app.sport.vote');
Route::get('/confirm/vote', 'VoteController@voteConfirm')->name('app.vote.confirm');
Route::get('/yes/vote', 'VoteController@yesConfirm')->name('app.vote.yes');
Route::get('/no/vote', 'VoteController@noConfirm')->name('app.vote.no');

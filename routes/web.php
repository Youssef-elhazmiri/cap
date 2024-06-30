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
})->name('welcome');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/guidechina', function () {
    return view('pages.guidechina');
})->name('guidechina');

Route::get('/all_univ', function () {
    return view('pages.universities.all_univ');
})->name('all_univ');

Route::get('/sichuan_university', function () {
    return view('pages.universities.sichuan_university');
})->name('sichuan_university');


Route::get('/south_china', function () {
    return view('pages.universities.south_china');
})->name('south_china');

Route::get('/china_univ_petro_beij', function () {
    return view('pages.universities.china_univ_petro_beij');
})->name('china_univ_petro_beij');

Route::get('/nanjing_tech_university', function () {
    return view('pages.universities.nanjing_tech_university');
})->name('nanjing_tech_university');

Route::get('/southwest-petroleum-university', function () {
    return view('pages.universities.southwest-petroleum-university');
})->name('southwest-petroleum-university');

Route::get('/yangzhou_university', function () {
    return view('pages.universities.yangzhou_university');
})->name('yangzhou_university');

Route::get('/tianjin_university', function () {
    return view('pages.universities.tianjin_university');
})->name('tianjin_university');

Route::get('/yunnan_university', function () {
    return view('pages.universities.yunnan_university');
})->name('yunnan_university');

Route::get('/zhengzhou_university', function () {
    return view('pages.universities.zhengzhou_university');
})->name('zhengzhou_university');

Route::get('/beijing_foreign_studies_univ', function () {
    return view('pages.universities.beijing_foreign_studies_univ');
})->name('beijing_foreign_studies_univ');

Route::get('/northwestern_polytechnical_university', function () {
    return view('pages.universities.northwestern_polytechnical_university');
})->name('northwestern_polytechnical_university');

Route::get('/shanghai_university', function () {
    return view('pages.universities.shanghai_university');
})->name('shanghai_university');

Route::get('/shanghai_university_of_engineering_science', function () {
    return view('pages.universities.shanghai_university_of_engineering_science');
})->name('shanghai_university_of_engineering_science');

Route::get('/shanghai_second_polytechnic_university', function () {
    return view('pages.universities.shanghai_second_polytechnic_university');
})->name('shanghai_second_polytechnic_university');

Route::get('/shanghai_dianji_university', function () {
    return view('pages.universities.shanghai_dianji_university');
})->name('shanghai_dianji_university');

Route::get('/jiangsu_university_science_and_technology', function () {
    return view('pages.universities.jiangsu_university_science_and_technology');
})->name('jiangsu_university_science_and_technology');

Route::get('/jiangsu_normal_university', function () {
    return view('pages.universities.jiangsu_normal_university');
})->name('jiangsu_normal_university');

Route::get('/changzhou_university', function () {
    return view('pages.universities.changzhou_university');
})->name('changzhou_university');

Route::get('/hubei_university_of_technology', function () {
    return view('pages.universities.hubei_university_of_technology');
})->name('hubei_university_of_technology');

Route::get('/listA', function () {
    return view('listA');
})->name('listA');





Route::get('/nantong_university', function () {
    return view('pages.universities.nantong_university');
})->name('nantong_university');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


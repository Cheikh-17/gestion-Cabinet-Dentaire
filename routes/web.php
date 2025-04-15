<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {

    return view('about');
});
Route::get('/DashboardMedecinChef', function () {

    return view('medecinChef.DashboardMedecinChef');
});
Route::get('/DashboardPatient', function () {

    return view('patient.DashboardPatient');
});
Route::get('/DashboardMedecin', function () {

    return view('medecin.DashboardMedecin');
});

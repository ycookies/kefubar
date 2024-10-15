<?php

use Dcat\Admin\Kefubar\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('kefubar', Controllers\KefubarController::class.'@index');
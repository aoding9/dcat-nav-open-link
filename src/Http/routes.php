<?php

use Aoding9\Dcat\Nav\OpenLink\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('dcat-nav-open-link', Controllers\DcatNavOpenLinkController::class.'@index');
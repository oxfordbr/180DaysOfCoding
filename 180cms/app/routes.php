<?php

Route::get('/', function() {
	dd(Config::get('database.default'));
});
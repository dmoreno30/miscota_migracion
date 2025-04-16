<?php

app()->get('/', 'Controller@index');
app()->get('/createProduct','ProductosController@index');
app()->get('/filterProduct','ProductosController@filter');
<?php

app()->get('/', 'Controller@index');
app()->get('/createProduct','ProductosController@readCSVProduct');
app()->get('/filterProduct','ProductosController@filter');


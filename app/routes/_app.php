<?php

app()->get('/', 'Controller@index');
app()->get('/createContact','ContactosController@readCSVContact');
app()->get('/createProduct','ProductosController@readCSVProduct');
app()->get('/createDeal','ProductosController@readCSVDeal');
app()->get('/filterProduct','ProductosController@filter');

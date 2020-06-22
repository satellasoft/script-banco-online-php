<?php

define('BASE', '/banco-online-php/');

define('DATA_PATH', 'dados');
//?url=saldo

    //'URL' => 'Controladora@Método'
$router = [
    //View
    'home' => 'ContaController@home',
    'saldo' => 'ContaController@saldo',
    'extrato' => 'ContaController@extrato',
    'deposito' => 'ContaController@deposito',
    'saque' => 'ContaController@saque',
    'cadastro' => 'LoginController@cadastro',
    //INTERNAL
    'auth' => 'LoginController@auth',
    'sair' => 'LoginController@logout',
    'register' => 'LoginController@register'
];

<?php

$rotas = [
    '/' => [
        'GET' => '\Controlador\RaizControlador#index',
    ],
    '/vendas' => [
        'POST' => '\Controlador\VendaControlador#armazenar',
    ],
    '/vendas/criar' => [
        'GET' => '\Controlador\VendaControlador#criar',
    ],
    '/relatorios/vendas' => [
        'GET' => '\Controlador\RelatorioVendaControlador#index',
    ],
];

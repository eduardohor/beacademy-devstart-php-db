<?php

use App\Controller\IndexController;
use App\Controller\ProductController;
use App\Controller\CategoryController;


function createRouter(string $controllerName, string $methodName)
{
    return [
        'controller' => $controllerName,
        'method' => $methodName
    ];
}

$routes = [
    '/' => createRouter(IndexController::class, 'indexAction'),

    '/produtos' => createRouter(ProductController::class, 'listAction'),
    '/produtos/novo' => createRouter(ProductController::class, 'addAction'),
    '/produtos/excluir' => createRouter(ProductController::class, 'removeAction'),
    '/produtos/editar' => createRouter(ProductController::class, 'editAction'),
    '/produtos/relatorio' => createRouter(ProductController::class, 'reportAction'),


    '/categorias' => createRouter(CategoryController::class, 'listAction'),
    '/categorias/nova' => createRouter(CategoryController::class, 'addAction'),
    '/categorias/excluir' => createRouter(CategoryController::class, 'removeAction'),
    '/categorias/editar' => createRouter(CategoryController::class, 'updateAction')


];

return $routes;
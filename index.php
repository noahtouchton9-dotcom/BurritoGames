<?php
require_once 'router.php';

$router = new Router();

$router->get('/', function() {
    require_once __DIR__ . '/views/home/index.html';
});

$router->get('/about', function() {
    require_once __DIR__ . '/views/about/index.html';
});

$router->get('/nchat', function() {
    require_once __DIR__ . '/views/nchat/index.html';
});

$router->get('/blog', function() {
    require_once __DIR__ . '/views/blog/index.html';
});

$router->dispatch();
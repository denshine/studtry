<?php

// подключаем конфиг
include ('application/config.php');

// подключаем ядро сайта
require_once 'core/core.php';

// Загружаем router
$router = new Router($registry);

// записываем данные в реестр
$registry->set ('router', $router);

// задаем путь до папки контроллеров.
$router->setPath (SITE_PATH . 'controllers');

// запускаем маршрутизатор
$router->start();

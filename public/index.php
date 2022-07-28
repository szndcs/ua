<?php

use controllers\AutoLoadController\AutoLoadController as AutoLoad;
use controllers\RouteController\RouteController;
use controllers\MainController\MainController;
use controllers\UsersController\UsersController;
use controllers\AdvertisementsController\AdvertisementsController;

require_once __DIR__.'/../controllers/AutoLoadController/AutoLoadController.php';

$app = new AutoLoad();
$app->load();

// Let's handle urls
RouteController::r('/', [MainController::class, 'index']);
RouteController::r('list', [MainController::class, 'index']);
RouteController::r('users', [UsersController::class, 'index']);
RouteController::r('advertisements', [AdvertisementsController::class, 'index']);

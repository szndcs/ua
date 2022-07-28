<?php
namespace controllers\AutoLoadController;

// Let's include the settings
include(__DIR__.'/../../config/App.php');

// Autoloading all the controllers, models and views which you added
class AutoLoadController {

    protected $controllers;
    protected $models;
    protected $views;

    public function __construct()
    {
        // Add controllers, one per line, use FolderName/ControllerName format
        $this->controllers = [
            'MainController/MainController',
            'RouteController/RouteController',
            'MysqlController/MysqlController',
            'UsersController/UsersController',
            'AdvertisementsController/AdvertisementsController',
        ];

        // Add models, one per line, use FolderName/ModelName format
        $this->models = [
            'UsersModel/UsersModel',
            'AdvertisementsModel/AdvertisementsModel',
        ];

        // Add views, one per line, use FolderName/ViewName format
        $this->views = [
            'MainView/MainView',
            'UsersView/UsersView',
            'AdvertisementsView/AdvertisementsView',
        ];
    }

    public function load()
    {
        foreach($this->controllers as $controller){
            require_once __DIR__.'/../'.$controller.'.php';
        }
        foreach($this->models as $model){
            require_once __DIR__.'/../../models/'.$model.'.php';
        }
        foreach($this->views as $view){
            require_once __DIR__.'/../../views/'.$view.'.php';
        }
    }
}
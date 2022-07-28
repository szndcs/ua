<?php
namespace controllers\MainController;

use views\MainView\MainView;

// This is the controller of the start page
class MainController
{
    protected $mainView;

    public function __construct()
    {
        $this->mainView = new MainView();

    }
    public function index()
    {
        $this->mainView->view();
    }
}
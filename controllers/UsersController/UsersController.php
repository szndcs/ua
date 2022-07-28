<?php
namespace controllers\UsersController;

use views\UsersView\UsersView;
use models\UsersModel\UsersModel;

// This is the controller of the user's page
class UsersController
{
    protected $users;
    protected $usersView;

    public function __construct()
    {
        $this->users = new UsersModel();
        $this->usersView = new UsersView();
    }

    public function index()
    {
        $this->usersView->view($this->users->getUsers());
    }
}
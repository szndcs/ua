<?php
namespace controllers\AdvertisementsController;

use views\AdvertisementsView\AdvertisementsView;
use models\AdvertisementsModel\AdvertisementsModel;

// This is the controller of the advertisements's page
class AdvertisementsController
{
    protected $advertisements;
    protected $advertisementsView;

    public function __construct()
    {
        $this->advertisements = new AdvertisementsModel();
        $this->advertisementsView = new AdvertisementsView();
    }

    public function index()
    {
        $this->advertisementsView->data($this->advertisements->getAdvertisements());
    }
}
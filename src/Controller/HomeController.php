<?php // src/Controller/HomeController.php

namespace App\Controller;

class HomeController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('Flash'); // Charge le FlashComponent
    }
    public function index()
    {
        $this->set('articles', $this->Articles->find()->all());
    }

}
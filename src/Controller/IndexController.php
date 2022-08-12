<?php //src/Controller/IndexController.php

namespace App\Controller;

class IndexController extends AppController
{
    public function index()
    {
        $this->set('articles', $this->Articles->find()->all());
    }
}

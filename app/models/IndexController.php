<?php

// app/controllers/IndexController.php

use IndexService;

class IndexController extends BaseController
{
    public function index() { 
        return View::make('newsletter.testy', with(new IndexService())->indexData());
    }
}
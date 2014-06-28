<?php

// app/models/indexService.php
namespace Services;
use Newsletter;
use Users;
class IndexService
{
    public function indexData()
    {
        $data = array(
            'ausgabenl'  => Newsletter::all(),
            'ausgabe' => Users::all(),
          
        );

        return $data;
    }

}
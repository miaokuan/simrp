<?php

namespace SimrpController;

use SimrpModel\Demo;

class Index extends Base
{

    public function index()
    {
        $demo = new Demo();
        $demo->demo('It is a model demo.');

    }
}


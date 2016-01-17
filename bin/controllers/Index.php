<?php

namespace SimrpBinController;

use SimrpBinModel\Demo;

class Index extends Base
{
    public function index()
    {
        echo Demo::demo();
    }
}


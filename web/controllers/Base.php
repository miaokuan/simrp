<?php

namespace SimrpController;

use Wee\Action;

abstract class Base extends Action
{
    public $mustLogin = true;

    public function init()
    {
        if ($this->mustLogin) {
            // do something
        }

    }

}


<?php
/**
 * @author miaokuan
 */

namespace SimrpBinController;

use Wee\Action;
use Wee\Log;

abstract class Base extends Action
{
    public function init()
    {
        $this->disableView();
    }

    public function progress($i, $max)
    {
        if ($i % 100 == 0) {
            Log::notice("progress: $i/$max");
        }
    }
}


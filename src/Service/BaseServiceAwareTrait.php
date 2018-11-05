<?php

namespace App\Service;

use Burzum\Cake\Service\ServiceAwareTrait;

trait BaseServiceAwareTrait  {
    use ServiceAwareTrait;

    public function getServiceLocator()
    {
        return new BaseServiceLocator();
    }

}
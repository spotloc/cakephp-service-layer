<?php

namespace Burzum\Cake\Service;


trait BaseServiceAwareTrait  {
    use ServiceAwareTrait;

    public function getServiceLocator()
    {
        return new BaseServiceLocator();
    }

}
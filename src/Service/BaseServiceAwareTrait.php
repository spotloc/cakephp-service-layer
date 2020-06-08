<?php

namespace Burzum\CakeServiceLayer\Service;


trait BaseServiceAwareTrait  {
    use ServiceAwareTrait;

    public function getServiceLocator()
    {
        return new BaseServiceLocator();
    }

}

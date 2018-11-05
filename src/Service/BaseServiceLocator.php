<?php

namespace App\Service;


use Burzum\Cake\Service\ServiceLocator;

class BaseServiceLocator extends ServiceLocator {
    protected function _create($class, $alias, $config)
    {
        if (empty($config)) {
            return new $class();
        }

        return new $class($config);
    }
}
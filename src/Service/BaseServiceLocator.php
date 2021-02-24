<?php
/*
 * Copyright (c) Spotloc 2020. Tous droits réservés.
 */

namespace Burzum\CakeServiceLayer\Service;


class BaseServiceLocator extends ServiceLocator {
    protected function _create($class, $alias, $config)
    {
        if (empty($config)) {
            return new $class();
        }

        return new $class($config);
    }
}

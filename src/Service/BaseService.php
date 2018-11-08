<?php
namespace Burzum\Cake\Service;

use Cake\Core\InstanceConfigTrait;

class BaseService {
    use InstanceConfigTrait;

    /**
     * Default config
     *
     * These are merged with user-provided config when the service is used.
     *
     * @var array
     */
    protected $_defaultConfig = [];


    /**
     * Constructor
     *
     * @param array $config Array of configuration settings.
     */
    public function __construct(array $config = [])
    {
        $this->setConfig($config);

        $this->initialize($config);
    }

    /**
     * Constructor hook method.
     *
     * Implement this method to avoid having to overwrite
     * the constructor and call parent.
     *
     * @param array $config The configuration settings provided to this component.
     * @return void
     */
    public function initialize(array $config)
    {
    }

}
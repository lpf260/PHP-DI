<?php

namespace DI;

/**
 * Factory for instanciating dependencies
 */
interface FactoryInterface {

    /**
     * Returns an instance of the class wanted
     * @param string $classname Name of the class
     * @return Object instance created
     */
    function getInstance($classname);

}

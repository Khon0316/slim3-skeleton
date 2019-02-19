<?php

namespace App\Controllers;

/**
 * Class Controller
 * @package App\Controllers
 */
class Controller
{
    protected $container;

    /**
     * Controller constructor.
     * @param $container
     */
    public function __construct($container)
    {
        $this->container = $container;
    }

}
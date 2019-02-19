<?php

namespace App\Controllers;

/**
 * Class Controller
 * @package App\Controllers
 */

/**
 * @OA\Info(title="Slim3 Skeleton API", version="0.1")
 *
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
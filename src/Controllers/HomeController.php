<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

/**
 * Class HomeController
 * @package App\Controllers
 */
class HomeController extends Controller
{
    /**
     * @param Request $request
     * @param Response $response
     * @param $args
     * @return string
     */
    public function index(Request $request, Response $response, $args)
    {
        return 'Home';
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: imac
 * Date: 2019-02-19
 * Time: 17:41
 */

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

/**
 * Class ApiController
 * @package App\Controllers
 */
class ApiController extends Controller
{
    /**
     * @param Request $request
     * @param Response $response
     * @param $args
     * @return Response
     */
    public function index(Request $request, Response $response, $args)
    {
        /**
         * @OA\Get(
         *     path="/api",
         *     @OA\Response(response="200", description="example resource")
         * )
         */
        $data = [
            'status' => 200,
            'description' => 'Success',
        ];

        $data = json_encode($data);

        $response->write($data);
        $response->withHeader('Content-Type', 'application/json');

        return $response;
    }
}
<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
    class SiteController {
        function index(Request $request, Response $response, $args) {
            $response->getBody()->write("Che ci fai qui sei nell' API!");
            return $response;
        }
    }
?>
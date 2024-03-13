<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;



class ImpiantoController {
        function info(Request $request, Response $response, $args){
            $impianto = new Impianto();

            $response->getBody()->write(json_encode($impianto));
            
            return $response;
        }
        function impianto(Request $request, Response $response, $args){
            $impianto = new Impianto();
            $encode = [
                "nome"=> $impianto->get_nome(),
                "latitudine"=> $impianto->get_latitudine(),
                "longitudine"=> $impianto->get_longitudine(),
            ];
            
            $response->getBody()->write(json_encode($encode));
            
            return $response;
        }
    }
<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;



class RilevatoriTemperaturaController {
    function getRilevatoriDiTemperatura(Request $request, Response $response, $args){
        $impianto = new Impianto();

        $revel = [];
        foreach($impianto->get_rilevatori() as $r){
            if($r->id == "temperatura"){
                $revel[] = $r;
            }
        }

        

        $response->getBody()->write(json_encode($revel));
        //dovrebbe dare solo quelli di umidita ma non so castare una classe custom
        
        return $response;
    }




    function getRilevatoriDiTemperaturaByid(Request $request, Response $response, $args){
        $id = $args["codiceSeriale"];
        $impianto = new Impianto();

        foreach($impianto->get_rilevatori() as $r){
            if($r->id == "temperatura"){
                $revel[] = $r;
            }
        }

        foreach($revel as $r){
            if($r->codiceSeriale == $id){
                $ritorna = $r;
                break;
            }
        }

        $response->getBody()->write(json_encode($ritorna));
        
        return $response;
    }






    function getMisureRilevatoriDiTemperaturaByid(Request $request, Response $response, $args){
        $id = $args["codiceSeriale"];
        $impianto = new Impianto();

        foreach($impianto->get_rilevatori() as $r){
            if($r->id == "temperatura"){
                $revel[] = $r;
            }
        }

        foreach($revel as $r){
            if($r->codiceSeriale == $id){
                $ritorna = $r->misurazioni;
                break;
            }
        }

        $response->getBody()->write(json_encode($ritorna));



        
        
        return $response;
    }




}
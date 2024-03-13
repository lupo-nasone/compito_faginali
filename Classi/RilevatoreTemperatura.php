<?php
    class RilevatoreTemperatura extends Rilevatore implements JsonSerializable{
        private $tipologia;
        


        function __construct($misurazioni, $codiceSeriale, $tipologia){
            $this->tipologia = $tipologia;
            parent::__construct("umidita",$misurazioni,"°C",$codiceSeriale);
        }

        public function getPosizione(){
            return $this->tipologia;
        }


        public function jsonSerialize(){
         return[
            "id"=> $this->id,
            "codiceSeriale"=> $this->codiceSeriale,
            "tipologia"=> $this->tipologia,
            "misurazioni"=> json_encode( $this->getMisurazioni())
            ];
        }



    }
?>
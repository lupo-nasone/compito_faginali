<?php
    class RilevatoreUmiodita extends Rilevatore implements JsonSerializable{
        private $posizione;
        


        function __construct($misurazioni, $codiceSeriale, $posizione){
            $this->posizione = $posizione;
            parent::__construct("umidita",$misurazioni,"%",$codiceSeriale);
        }

        public function getPosizione(){
            return $this->posizione;
        }


        public function jsonSerialize(){
         return[
            "id"=> $this->id,
            "codiceSeriale"=> $this->codiceSeriale,
            "posizione"=> $this->posizione,
            "misurazioni"=> json_encode( $this->getMisurazioni())
            ];
        }



    }
?>
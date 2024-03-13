<?php
    class Rilevatore implements JsonSerializable{
        private $id;
        private $misurazioni = [];
        private $unitaDiMisura;
        private $codiceSeriale;

        function __construct($id, $misurazioni,$unitaDiMisura, $codiceSeriale){
            $this->id = $id;
            $this->misurazioni = $misurazioni;
            $this->unitaDiMisura = $unitaDiMisura;
            $this->codiceSeriale = $codiceSeriale;
        }

        public function getId(){
            return $this->id;
        }

        public function getMisurazioni(){
            return $this->misurazioni;
        }

        public function getUnitaDiMisura(){
            return $this->unitaDiMisura;
        }

        public function getCodiceSeriale(){
            return $this->codiceSeriale;
        }


        public function jsonSerialize(){
         return[
            "id"=> $this->id,
            "misurazioni"=> $this->misurazioni,
            "codiceSeriale"=> $this->codiceSeriale
            ];
        }
    }
?>
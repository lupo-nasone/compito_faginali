<?php
    class Misurazione implements JsonSerializable{
        private $data;
        private $valore;

        public function __construct($data, $valore){
            $this->data = $data;
            $this->valore = $valore;
        }

        



        public function jsonSerialize(){
         return[
            "data"=> $this->data,
            "valore"=> $this->valore
            ];
        }
    }
?>
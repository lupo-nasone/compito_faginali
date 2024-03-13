<?php
    class Impianto implements JsonSerializable{
        private $nome;
        private $latitudine;
        private $longitudine;
        private $rilevatori = [];

        function __construct(){
            $content = json_decode(file_get_contents("./data/data.json"), false);
            $this->nome = $content->nome;
            $this->latitudine = $content->latitudine;
            $this->longitudine = $content->longitudine;
            $this->rilevatori = $content->rilevatori;
        }

        function get_nome(){
             return $this->nome;
        }

        function get_latitudine(){
            return $this->latitudine;
        }

        function get_longitudine(){
            return $this->longitudine;
        }

        function get_rilevatori(){
            return $this->rilevatori;
        }

        public function jsonSerialize(){
            return[
               "nome"=> $this->nome,
               "latitudine"=> $this->latitudine,
               "longitudine"=> $this->longitudine,
               "rilevatori"=> $this->rilevatori
               ];
           }

            

    }
?>
<?php

    class Movie{
        public $titolo;
        public $durata;
        public $genere;


        function __construct($_titolo,$_durata,$_genere)
        {
            $this->titolo = $_titolo;
            $this->durata = $_durata;
            $this->genere = $_genere;
        }


        public function durata(){
            if($this->durata > 120){
                return 'lungo';
            }else{
                return 'corto';
            }
        }

    }

?>
<?php

    class Movie{
        public $titolo;
        public $durata;
        public $genere;
        public $immagine;


        function __construct($_titolo,$_durata,$_genere,$_immagine)
        {
            $this->titolo = $_titolo;
            $this->durata = $_durata;
            $this->genere = $_genere;
            $this->immagine = $_immagine;
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
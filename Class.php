<?php 
    class Movie{

        //proprietà
        public $nome;
        public $genere;
        public $anno;
        public $copertina;

        //costruttore
        function __construct(string $nome,string $genere,string $anno,string $copertina){
            $this->nome = $nome;
            $this->genere = $genere;
            $this->anno = $anno;
            $this->copertina = $copertina;
        }

        //Metodi
        public function getName(){
            return $this->nome;
        }
    
        public function getGenere(){
            return $this->genere;
        }
    
        public function getYear(){
            return $this->anno;
        }

        public function getCover(){
            return $this->copertina;
        }


    }


?>
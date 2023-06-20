<?php 

    // class Genere {
    //     public $nomeGenere;

    //     public function __construct($nomeGenere) {
    //         $this->nomeGenere = $nomeGenere;
    //     }
    // }
    class Movie{

        //proprietà
        public $nome;
        public $genere;
        public $anno;

        //costruttore
        function __construct($nome, $genere, $anno){
            $this->nome = $nome;
            $this->genere = $genere;
            $this->anno = $anno;
        }

        //Metodi
        function filmMovie(){
            $genresString = implode(", ", $this->genere);
            return "Titolo: {$this->nome}  <br> Genere: {$genresString}  <br> Anno: {$this->anno}  <br>";
        }


    }

$movie1 = new Movie("Tyler Rake", ["Azione, fantascienza"], 2020);
echo $movie1->filmMovie() . "<br>";

$movie2 = new Movie("Inception", ["Fantascienza, Azione"], 2015);
echo $movie2->filmMovie() . "<br>";
// var_dump($movie)

?>
<?php 

class Videogiochi {

    // attributi

    private $nome;
    private $piattaforma;
    private $prezzo = 60;
    private $sconto;
    private $spedizione;

    // cotruttore

    public function __construct ($nome, $piattaforma, $sconto, $spedizione){

        $this -> nome =
        $nome;
        $this->piattaforma =
        $piattaforma;
        $this->sconto =
        $sconto;
        $this->spedizione =
        $spedizione;

    }

    // metodi

    public function getNome()
    {

        return $this->nome;
    }

    public function getPrezzo()
    {

        return $this->prezzo;
    }
}





?>
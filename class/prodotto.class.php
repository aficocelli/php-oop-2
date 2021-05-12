<?php 

class Videogiochi {

    // attributi

    private $nome;
    private $piattaforma;
    private $prezzo;
    private $sconto;
    private $spedizione;

    // cotruttore

    public function __construct ($nome, $piattaforma, $prezzo, $sconto, $spedizione){

        $this -> nome =
        $nome;
        $this->piattaforma =
        $piattaforma;
        $this->prezzo =
        $prezzo;
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
}





?>
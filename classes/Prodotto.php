<?php

class Prodotto {
    protected $nome;
    protected $prezzo;
    protected $categoria;
    protected $quantita;
    

    public function __construct(string $nome, string $prezzo, string $categoria, $quantità) {
        $this->name = $nome;
        $this->price = $prezzo;
        $this->category = $categoria;
        $this->quantita = $quantità;
        
    }

    
    public function getName() {
        return $this->nome;
    }

    public function getPrice() {
        return $this->prezzo;
    }

    public function getCategory() {
        return $this->categoria;
    }

    public function getQuantita() {
        return $this->quantita;
    }
    
    public function setQuantita($_quantita) {

        if(is_numeric($_quantita) ) {
        $this->quantita = $_quantita;
        }
        return;
    }
}
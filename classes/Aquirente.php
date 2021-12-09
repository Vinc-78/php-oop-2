<?php



require_once __DIR__ . "/User.php";
require_once __DIR__ . "/../traits/TipoDiSpedizione.php";

class Acquirente extends User {

    protected $creditCards = [];

    use TipoDiSpedizione;  /* per usare il traits */

    public function __construct(string $nome, string $cognome, string $email, string $password, $corriere, $consegna){
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->getEmail($email);  
        $this->password = $password;
        $this->addVettore($corriere);
        $this->addTime($consegna);
    }

    public function addCreditCard(CreditCard $creditCard) {
        $this->creditCards = $creditCard;
    }

    public function getCreditCard() {
        return $this->creditCards;
    }

    
}
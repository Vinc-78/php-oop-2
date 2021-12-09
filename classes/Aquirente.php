<?php



require_once __DIR__ . "/User.php";
require_once __DIR__ . "/../traits/TipoDiSpedizione.php";

class Acquirente extends User {

    protected $creditCards = [];

    use TipoDiSpedizione;

    public function addCreditCard(CreditCard $creditCard) {
        $this->creditCards = $creditCard;
    }

    public function getCreditCard() {
        return $this->creditCards;
    }

    
}
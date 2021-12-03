<?php



require_once __DIR__ . "/User.php";

class Acquirente extends User {

    protected $creditCards = [];
    public function addCreditCard(CreditCard $creditCard) {
        $this->creditCards = $creditCard;
    }

    public function getCreditCard() {
        return $this->creditCards;
    }
}
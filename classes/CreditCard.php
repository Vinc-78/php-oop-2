<?php
class CreditCard {
    protected $tipo;
    protected $numero;
    protected $expireDate;
    private $cvc;

    public function __construct(string $type, string $number,  string $expireDate, int $cvc) {
        $this->tipo = $type;
        $this->numero = $number;
        $this->expireDate = $expireDate;
        $this->cvc = $cvc;
    }
}

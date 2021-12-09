<?php
class CreditCard {
    protected $tipo;
    protected $numero;
    protected $expireDate;
    private $cvc;

    public function __construct(string $type, string $number,  string $expireDate, int $cvc) {
        
        $this->tipo = $type;

        $this->getNumber($number);
        $this->getValidita($expireDate);
        $this->getCode($cvc);
       
        
        
    }

    protected function getNumber($number){
        if (!is_int($number)) {
            throw new Exception('Non è un numero valido');
            }

        else{
            $this->numero = $number;
        }

    }
    protected function getValidita($expireDate){
        if ($expireDate<date("Y")) {
            throw new Exception('Documento scaduto');
            }

        else{
            $this->expireDate = $expireDate;
        }

    }
    protected function getCode($cvc){
        if (!is_int($cvc) && ($cvc<=999) && ($cvc>0)) {
            throw new Exception('Non è un numero valido');
            }

        else{
            $this->cvc = $cvc;
        }
        

    }
}

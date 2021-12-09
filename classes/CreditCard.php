<?php
class CreditCard {
    protected $tipo;
    protected $numero;
    protected $expireDate;
    private $cvc;

    public function __construct(string $type, int $number,  string $expireDate, int $cvc) {
        
        $this->tipo = $type;

        $this->getNumber($number);
        $this->getValidita($expireDate);
        $this->getCode($cvc);
       
        
        
    }
/* Se una delle seguenti condizioni non è rispettata da un fatal error */
    protected function getNumber($number){
        if (!is_int($number)) {
            throw new Exception ('Non è un numero valido');
            }

        return $this->numero = $number;
        

    }
    protected function getValidita($expireDate){
        if ( $expireDate < date("m/Y")) {

            
            throw new Exception('Documento scaduto');
            }
            var_dump(date("m/Y"));
       return $this->expireDate = $expireDate;
        

    }
    protected function getCode($cvc){
        if (!(is_int($cvc) && ($cvc<=999) && ($cvc>0))) {
            throw new Exception('Non è un numero valido');
            }

        return $this->cvc = $cvc;
        
        

    }
}

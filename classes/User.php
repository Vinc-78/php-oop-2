<?php

class User {
    protected $nome;
    protected $cognome;
    protected $email;
    private $password;  /* è visibile solo alla classe */

    public function __construct(string $nome, string $cognome, string $email, string $password) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->getEmail($email);  
        $this->password = $password;
    }

    public function getEmail($email) {

        try { 
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                throw new Exception ('!!! Non è un email valida !!!');
            }
            else {
                $this->email = $email;
            }

        }catch(Exception $e) {
            echo $e->getMessage();
        }

        
    }
}

<?php

class User {
    protected $nome;
    protected $cognome;
    protected $email;
    private $password;

    public function __construct(string $nome, string $cognome, string $email, string $password) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->email = $email;
        $this->password = $password;
    }
}

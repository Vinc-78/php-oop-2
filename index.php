<?php

require_once __DIR__ . "/classes/Prodotto.php";
require_once __DIR__ . "/classes/CreditCard.php";
require_once __DIR__ . "/classes/Aquirente.php";

$transazione = [];

/* Scelta del prodotto e quantità */
$id = new Prodotto('S-22', '450,00€', 'cellulare', 1);
var_dump($id);
echo '<br> <br>';

$transazione [] = $id;

/* Cliente */
$newAquirente = new Acquirente('Mario', 'Arancio', 'mario.arancio@email.it', 'dsdgs','tnt','mattino');

/* $newAquirente->addVettore("tnt");

$newAquirente->addTime("mattino"); */

var_dump($newAquirente);

$transazione [] = $newAquirente;


/* Metodo di pagamento: se uno degli argomenti passati non è corretto il " throw new Exception " blocca*/
$pagamento = new CreditCard('Visa', 9873, '12/2021', 888);
echo '<br> <br>';


$newAquirente->addCreditCard($pagamento );
var_dump($newAquirente->getCreditCard());

/* Riepiepilo transazione nel caso da pa passare alla pagina HTML  */

$transazione [] =$pagamento;

echo  "Transazione" ;

var_dump($transazione);
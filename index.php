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
$newAquirente = new Acquirente('Mario', 'Arancio', 'MarAr12', 'mario.arancio@email.it', 'dsdgs');

$newAquirente->addVettore("tnt");

$newAquirente->addTime("mattino");

var_dump($newAquirente);

$transazione [] = $newAquirente;


/* Metodo di pagamento: */
$pagamento = new CreditCard('Visa', '987320232', '12/2080', 123);
echo '<br> <br>';


$newAquirente->addCreditCard($pagamento );
var_dump($newAquirente->getCreditCard());

/* Riepiepilo transazione nel caso da pa passare alla pagina HTML  */

$transazione [] =$pagamento;

echo  "Transazione" ;

var_dump($transazione);
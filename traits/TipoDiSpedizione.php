<?php

trait TipoDiSpedizione {
  protected $vettore;
  protected $preferenze;

  public function addVettore ($corriere) {
    if ($corriere) {
        $this->vettore="consegna tramite ". $corriere;
    }
    else{
       $this->vettore="consegna tramite posta ordinaria";
    }

  }

  public function addTime ($time) {
    if (isset($time)) {
        $this->preferenze="consegna preferibile di " . $time;
    }

  }


  
}

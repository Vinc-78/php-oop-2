<?php

trait TipoDiSpedizione {
  protected $vettore;
  protected $preferenze;

  public function addVettore ($corriere) {
    if ($corriere) {
        $this->vettore=$corriere;
    }

  }

  public function addTime ($time) {
    if (isset($time)) {
        $this->preferenze=$time;
    }

  }


  
}

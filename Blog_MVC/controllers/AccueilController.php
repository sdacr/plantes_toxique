<?php

class AccueilController
{
  public function index()
  {
    //recuperation du mois actuel
    
    $a = new Accueil();
    $plantes = $a->getAllPlanteByDate();
    $vue="vues/accueil.phtml";
    include "vues/layout.phtml";
  }

  public function search()
  {
    //var_dump($_POST['planti']);
    
    $a = new Accueil();
    $search = $a->getPlanteByName();
    //var_dump($search);die;
    $vue="vues/resultatsearch.phtml";
    include "vues/layout.phtml";
  }
}

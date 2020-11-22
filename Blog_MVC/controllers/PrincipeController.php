<?php


class PrincipeController
{
    public function index()
    {

        // appel au modele
        $a = new Accueil();
        $plantes = $a->getAllPlante();
        $a = new Couleur();
        $couleurs = Couleur::getAllCouleur();
        $a = new Principe();
        $principes = Principe::getAllPrincipe();
        $a = new Famille();
        $familles = Famille::getAllFamille();


        // afficher

        $vue="vues/all_principes.phtml";
        include "vues/layout.phtml";
    }

    public function insert()
    {
        $session = new SessionVerify();
        if ($session->isAdmin()) {
            
            $a = new Principe();
            $principes = Principe::getAllPrincipe();
           
            if (!empty($_POST['principe'])) {
                $insert=htmlspecialchars($_POST['principe']);
                $cate = new Principe();
                $cate->setPrincipeActif($insert);
                $cate->insert_New();
            }
        } else {
            header('Location: index.php?controller=connexion&action=index');
        }
        $vue="vues/admin_insert_principe.phtml";
        include "vues/layout.phtml";
    }

    public function edit()
    {
        $session = new SessionVerify();
        if ($session->isAdmin()) {
           
           $id=htmlspecialchars($_GET['id']);
            
            $a = new Principe();
            $principe = $a->getOnePrincipe($id);

            if (isset($_POST['principe'])) {
                $edit=htmlspecialchars($_POST['principe']);
                $principe->setPrincipeActif($edit);
                $principe->editPrincipe($id);
            }
        } else {
            header('Location: index.php?controller=connexion&action=index');
        }
        $vue="vues/admin_edit_principe.phtml";
        include "vues/layout.phtml";
    }
    public function admin()
    {
        $session = new SessionVerify();
        if ($session->isAdmin()) {
            // appel au modele
         
            $a = new Principe();
            $principes = Principe::getAllPrincipe();
          

            //var_dump($principes);
            // afficher
        } else {
            header('Location: index.php?controller=connexion&action=index');
        }
        $vue="vues/admin_all_principes.phtml";
        include "vues/layout.phtml";
    }
    public function delete()
    {

        $a = new Principe();

        $couleu = $a->delete();
    }
}

<?php


class CouleurController
{
    public function index()
    {
        // appel au modele
        $a = new Couleur();
        $couleurs = Couleur::getAllCouleur();
        // afficher

        $vue="vues/all_couleurs.phtml";
        include "vues/layout.phtml";
    }



    public function insert()
    {
        //connexion obligatoire
        $session = new SessionVerify();
        if ($session->isAdmin()) {
            
            $a = new Couleur();
            $couleurs = Couleur::getAllCouleur();
            if (!empty($_POST['couleur'])) {
                $insert=htmlspecialchars($_POST['couleur']);
                $couleur = new Couleur();
                $couleur->setCouleur($insert);
                $couleur->insert_New();
            }
        } else {
            header('Location: index.php?controller=connexion&action=index');
        }
        $vue="vues/admin_insert_couleur.phtml";
        include "vues/layout.phtml";
    }

    public function edit()
    {
        //connexion obligatoire
        $session = new SessionVerify();
        if ($session->isAdmin()) {

            
            $id=htmlspecialchars($_GET['id']);
            $a = new Couleur();
            $couleur = $a->getOneCouleur($id);

            if (isset($_POST['couleur'])) {
                $edit=htmlspecialchars($_POST['couleur']);
                $couleur->setCouleur($edit);
                $couleur->editCouleur($id);
            }
        } else {
            header('Location: index.php?controller=connexion&action=index');
        }

        $vue="vues/admin_edit_couleur.phtml";
        include "vues/layout.phtml";
    }


    public function admin()
    {
        //connexion obligatoire
        $session = new SessionVerify();
        // appel au modele
        $a = new Couleur();
        $couleurs = Couleur::getAllCouleur();

        //var_dump($couleurs);
        // afficher

        $vue="vues/admin_all_couleurs.phtml";
        include "vues/layout.phtml";
    }
    public function delete()
    {

        $a = new Couleur();

        $couleu = $a->delete();
    }
}

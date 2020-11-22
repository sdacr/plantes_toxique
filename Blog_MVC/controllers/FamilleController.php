<?php


class FamilleController
{
    public function index()
    {

        $a = new Famille();
        $familles = Famille::getAllFamille();

        //var_dump($familles);
        // afficher

        $vue="vues/all_familles.phtml";
        include "vues/layout.phtml";
    }

    public function insert()
    {
        $session = new SessionVerify();
        if ($session->isAdmin()) {
            
            $a = new Famille();
            $familles = Famille::getAllFamille();

            if (!empty($_POST['famille'])) {
                $insert=htmlspecialchars($_POST['famille']);
                $cate = new Famille();
                $cate->setFamille($insert);
                $cate->insert_New();
            }
        } else {
            header('Location: index.php?controller=connexion&action=index');
        }

        $vue="vues/admin_insert_famille.phtml";
        include "vues/layout.phtml";
    }

    public function edit()
    {
        $session = new SessionVerify();
        if ($session->isAdmin()) {
            
            $id=htmlspecialchars($_GET['id']);
            $a = new Famille();
            $famille = $a->getOneFamille($id);

            if (isset($_POST['famille'])) {
                $edit=htmlspecialchars($_POST['famille']);
                $famille->setFamille($edit);
                $famille->editFamille($id);
            }
        } else {
            header('Location: index.php?controller=connexion&action=index');
        }

        $vue="vues/admin_edit_famille.phtml";
        include "vues/layout.phtml";
    }
    public function admin()
    {

        $session = new SessionVerify();
        if ($session->isAdmin()) {

            // appel au modele
            $a = new Famille();
            $familles = Famille::getAllFamille();
        } else {
            header('Location: index.php?controller=connexion&action=index');
        }
        //var_dump($familles);
        // afficher

        $vue="vues/admin_all_familles.phtml";
        include "vues/layout.phtml";
    }
    public function delete()
    {

        $a = new Famille();

        $couleu = $a->delete();
    }
}

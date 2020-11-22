<?php


class PlanteController
{

    public function admin()
    {
        $session = new SessionVerify();
        if ($session->isAdmin()) {
            $a = new Plante();
            $plantes = $a->getAllPlante();
            // $plantes = Plante::getAllPlante();
            $a = new Couleur();
            $couleurs = Couleur::getAllCouleur();
            $a = new Principe();
            $principes = Principe::getAllPrincipe();
            $a = new Famille();
            $familles = Famille::getAllFamille();


            // afficher
        } else {
            header('Location: index.php?controller=connexion&action=index');
        }
        $vue="vues/admin_all_plantes.phtml";
        include "vues/layout.phtml";
    }

    public function insert()
    {
        $session = new SessionVerify();
        if ($session->isAdmin()) {

            $data = new Database();
            $plantes = Plante::getAllPlante();
            $familles = Famille::getAllFamille();
            $couleurs = Couleur::getAllCouleur();
            $principes = Principe::getAllPrincipe();
            //var_dump($_POST); die;


            if (isset($_POST['nom'])) {
                $plante = new Plante();
                $plante->setNom($_POST['nom']);
                $plante->setScienceNom($_POST['scienceNom']);
                $plante->setMaturite($_POST['maturite']);
                $plante->setPeriode($_POST['periode']);
                $plante->setDepartement($_POST['departement']);
                $plante->setGravite($_POST['gravite']);
                $plante->setType($_POST['type']);
                $plante->setGraine($_POST['graine']);
                $plante->setFruit($_POST['fruit']);
                $plante->setChair($_POST['chair']);
                $plante->setCaractere($_POST['caractere']);
                $plante->setId_couleur($_POST['id_couleur']);
                $plante->setId_famille($_POST['id_famille']);
                $plante->setId_principeActif($_POST['id_principeActif']);


                if (!empty($_FILES['fileToUpload'])) {
                    $result_file = $data->uploadImage('uploads/', "fileToUpload");
                    if ($result_file) {
                        unlink("uploads" . DIRECTORY_SEPARATOR . $plante->getImage());
                        $plante->setImage($result_file);
                    }
                } else {
                    $plante->setImage($plante->getImage());
                }

                $plante->insert_New();
                header("Location: index.php?controller=plante&action=admin");
            }
        } else {
            header('Location: index.php?controller=connexion&action=index');
        }
        $vue="vues/admin_insert_plante.phtml";
        include "vues/layout.phtml";
    }


    public function edit()
    {   /*  action =edit  */
        $session = new SessionVerify();
        if ($session->isAdmin()) {

            $data = new Database();
            $plante = Plante::getPlante($_GET['id']);
            $familles = Famille::getAllFamille();
            $couleurs = Couleur::getAllCouleur();
            $principes = Principe::getAllPrincipe();
            //var_dump($_POST); die;
            if (!empty($_POST)) {

                if (isset($_POST['nom'])) {
                    $plante->setNom($_POST['nom']);
                    $plante->setScienceNom($_POST['scienceNom']);
                    $plante->setMaturite($_POST['maturite']);
                    $plante->setPeriode($_POST['periode']);
                    $plante->setDepartement($_POST['departement']);
                    $plante->setGravite($_POST['gravite']);
                    $plante->setType($_POST['type']);
                    $plante->setGraine($_POST['graine']);
                    $plante->setFruit($_POST['fruit']);
                    $plante->setChair($_POST['chair']);
                    $plante->setCaractere($_POST['caractere']);
                    $plante->setId_couleur($_POST['id_couleur']);
                    $plante->setId_famille($_POST['id_famille']);
                    $plante->setId_principeActif($_POST['id_principeActif']);


                    if (!empty($_FILES['fileToUpload'])) {
                        $result_file = $data->uploadImage('uploads/', "fileToUpload");
                        if ($result_file) {
                            unlink("uploads" . DIRECTORY_SEPARATOR . $plante->getImage());
                            $plante->setImage($result_file);
                        }
                    } else {
                        $plante->setImage($plante->getImage());
                    }

                    $plante->editPlante();
                    //var_dump($plante);
                    $plante = Plante::getPlante($_GET['id']);
                    header("Location: index.php?controller=plante&action=edit&id=" . $_GET['id']);
                }
            }
        } else {
            header('Location: index.php?controller=connexion&action=index');
        }
        $vue="vues/admin_edit_plante.phtml";
        include "vues/layout.phtml";
    }



    public function show()
    {
        $show=htmlspecialchars($_GET['id']);
        $a = new Couleur();
        $couleurs = Couleur::getAllCouleur();
        $a = new Principe();
        $principes = Principe::getAllPrincipe();
        $a = new Famille();
        $familles = Famille::getAllFamille();
        $a = new Plante();
        $plante = $a->showPlante($show);


        // afficher

        $vue="vues/show_plante.phtml";
        include "vues/layout.phtml";
    }
    public function showc()
    {
        $showc=htmlspecialchars($_GET['id']);
        $a = new Couleur();
        $couleurs = Couleur::getAllCouleur();
        $a = new Principe();
        $principes = Principe::getAllPrincipe();
        $a = new Famille();
        $familles = Famille::getAllFamille();
        $a = new Plante();
        $plantesaaa = $a->getPlanteByCouleur($showc);
        // afficher
        if (!empty($plantesaaa)) {
            $vue="vues/all_plantes_by_couleur.phtml";
            include "vues/layout.phtml";
        }  else ( header('Location: index.php?controller=couleur&action=index'));
    }
    public function showf()
    {
        $showf=htmlspecialchars($_GET['id']);
        $a = new Couleur();
        $couleurs = Couleur::getAllCouleur();
        $a = new Principe();
        $principes = Principe::getAllPrincipe();
        $a = new Famille();
        $familles = Famille::getAllFamille();
        $a = new Plante();
        $familles = $a->getPlanteByFamille($showf);
        
        // afficher
        if (!empty($familles)) {
            $vue="vues/all_plantes_by_famille.phtml";
            include "vues/layout.phtml";
        } else ( header('Location: index.php?controller=famille&action=index'));
    }
    public function showp()
    {
        $showp=htmlspecialchars($_GET['id']);
        $a = new Couleur();
        $couleurs = Couleur::getAllCouleur();
        $a = new Principe();
        $principes = Principe::getAllPrincipe();
        $a = new Famille();
        $familles = Famille::getAllFamille();
        $a = new Plante();
        $principes = $a->getPlanteByPrincipe($showp);
        //$principes = Plante::getPlanteByPrincipe($_GET['id']);
        // afficher
        if (!empty($principes)) {
            $vue="vues/all_plantes_by_principe.phtml";
            include "vues/layout.phtml";
        } else ( header('Location: index.php?controller=principe&action=index'));
    }

    public function delete()
    {

        $a = new Plante();

        $couleu = $a->delete();
    }
}

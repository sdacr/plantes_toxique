<?php


class Couleur
{
    private $id;
    private $couleur;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }



    /**
     * @return mixed
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * @param mixed $couleur
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }


    // méthode d'ajout d'une couleur
    public function insert_New()
    {
        $bdd = new Database();
        $cnx = $bdd->getCnx();
        //préparation
        $query = $cnx->prepare("INSERT INTO couleur (couleur) VALUES (?)");

        //
        // exécution
        $query->execute(array($this->couleur));
    }




    // méthode de récupération des toutes les couleurs
    public static function getAllCouleur()
    {
        // cnx à la bdd
        $bdd = new Database();
        $cnx = $bdd->getCnx();
        //préparation
        $query = $cnx->query("SELECT id, couleur FROM couleur order BY couleur");


        //
        // exécution
        $couleurs  = $query->fetchAll(PDO::FETCH_CLASS, "Couleur");

        //
        //retour
        return $couleurs;
    }


    // méthode de récupération d'une couleur
    public function getOneCouleur($id)
    {
        $bdd = new Database();
        $cnx = $bdd->getCnx();
        //préparation
        $query = $cnx->prepare("SELECT id, couleur FROM couleur WHERE id = ?");
        $query->setFetchMode(PDO::FETCH_CLASS, "Couleur");
        $query->execute([$id]);
        //
        // exécution
        $couleur  = $query->fetch();
        //
        //retour
        return $couleur;
    }


    // méthode de modification d'une couleur

    public function editCouleur(int $id)
    {

        $bdd = new Database();
        $cnx = $bdd->getCnx();



        $query = $cnx->prepare('UPDATE couleur SET
                    couleur =?
                    WHERE id =?');

        $query->execute(array(
            $this->couleur,
            $id
        ));
    }

    public function __toString()
    {
        return $this->couleur;
    }

    public static function delete()
    {
        // cnx à la bdd
        $bdd = new Database();
        $cnx = $bdd->getCnx();
        //préparation

        if (array_key_exists('id', $_GET) && ctype_digit($_GET['id'])) {

            $query = $cnx->prepare("DELETE FROM `couleur` WHERE id = ?");
            $query->execute([$_GET['id']]);

            header("Location: index.php?controller=couleur&action=admin");
        }
    }
}

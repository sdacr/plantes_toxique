<?php


class Principe
{
    private $id;
    private $principeActif;

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
    public function getPrincipeActif()
    {
        return $this->principeActif;
    }

    /**
     * @param mixed $principeActif
     */
    public function setPrincipeActif($principeActif)
    {
        $this->principeActif = $principeActif;
    }

 
    // méthode d'ajout d'un auteur
    public function insert_New()
    {
        $bdd = new Database();
        $cnx = $bdd->getCnx();
        //préparation
        $query = $cnx->prepare("INSERT INTO principeactif (principeActif) VALUES (?)");

        //
        // exécution
        $query->execute(array($this->principeActif));
    }




    // méthode de récupération des tous les principes
    public static function getAllPrincipe()
    {
        // cnx à la bdd
        $bdd = new Database();
        $cnx = $bdd->getCnx();
        //préparation
        $query = $cnx->query("SELECT id, principeActif FROM `principeactif` ORDER BY principeActif");
        //
        // exécution
        $principes  = $query->fetchAll(PDO::FETCH_CLASS, "Principe");
        //
        //retour
        return $principes;
    }


    // méthode de récupération d'un principe
    public function getOnePrincipe($id)
    {
        $bdd = new Database();
        $cnx = $bdd->getCnx();
        //préparation
        $query = $cnx->prepare("SELECT id, principeActif FROM `principeactif` WHERE id = ?");
        $query->setFetchMode(PDO::FETCH_CLASS, "Principe");
        $query->execute([$id]);
        //
        // exécution
        $principe  = $query->fetch();
        //
        //retour
        return $principe;
    }


    // méthode de modification d'un principe

    public function editPrincipe(int $id)
    {

        $bdd = new Database();
        $cnx = $bdd->getCnx();



        $query = $cnx->prepare('UPDATE principeactif SET
                    principeActif =?
                    WHERE id =?');

        $query->execute(array(
            $this->principeActif,
            $id
        ));
    }

    public function __toString()
    {
        return $this->principeActif;
    }
    // methode de suppression d'un principe
    public static function delete()
    {
        // cnx à la bdd
        $bdd = new Database();
        $cnx = $bdd->getCnx();
        $delete=htmlspecialchars($_GET['id']);
        //préparation

        if (array_key_exists('id', $_GET) && ctype_digit($delete)) {

            $query = $cnx->prepare("DELETE FROM `principeActif` WHERE id = ?");
            $query->execute([$delete]);

            header("Location: index.php?controller=principe&action=admin");
        }
    }
}

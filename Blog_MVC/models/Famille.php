<?php


class Famille
{
    private $id;
    private $famille;

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
    public function getFamille()
    {
        return $this->famille;
    }

    /**
     * @param mixed 
     */
    public function setFamille($famille)
    {
        $this->famille = $famille;
    }

    /**
     * @return mixed
     */
    public function getGeneral()
    {
        return $this->general;
    }

    /**
     * @param mixed $general
     */
    public function setGeneral($general)
    {
        $this->general = $general;
    }

    // méthode d'ajout d'une famille
    public function insert_New()
    {
        $bdd = new Database();
        $cnx = $bdd->getCnx();
        //préparation
        $query = $cnx->prepare("INSERT INTO famille (famille) VALUES (?)");

        //
        // exécution
        $query->execute(array($this->famille));
    }


    // méthode de récupération des familles
    public static function getAllFamille()
    {
        // cnx à la bdd
        $bdd = new Database();
        $cnx = $bdd->getCnx();
        //préparation
        $query = $cnx->query("SELECT id, famille, general FROM `famille` ORDER BY famille");
        //
        // exécution
        $familles  = $query->fetchAll(PDO::FETCH_CLASS, "Famille");
        //
        //retour
        return $familles;
    }


    // méthode de récupération d'une famille
    public static function getOneFamille($id)
    {
        $bdd = new Database();
        $cnx = $bdd->getCnx();
        //préparation
        $query = $cnx->prepare("SELECT id, famille, general FROM `famille` WHERE id = ?");
        $query->setFetchMode(PDO::FETCH_CLASS, "Famille");
        $query->execute([$id]);
        //
        // exécution
        $famille = $query->fetch();
        //
        //retour
        return $famille;
    }


    // méthode de modification d'une famille
    public function editFamille(int $id)
    {

        $bdd = new Database();
        $cnx = $bdd->getCnx();



        $query = $cnx->prepare('UPDATE famille SET
                        famille =?
                        WHERE id =?');

        $query->execute(array(
            $this->famille,
            $id
        ));
    }

    public function __toString()
    {
        return $this->famille;
    }

    public static function delete()
    {
        // cnx à la bdd
        $bdd = new Database();
        $cnx = $bdd->getCnx();
        $delete=htmlspecialchars($_GET['id']);
        //préparation

        if (array_key_exists('id', $_GET) && ctype_digit($delete)) {

            $query = $cnx->prepare("DELETE FROM `famille` WHERE id = ?");
            $query->execute([$delete]);

            header("Location: index.php?controller=famille&action=admin");
        }
    }
}

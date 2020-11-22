<?php


class Plante
{
    private $id;
    private $nom;
    private $scienceNom;
    private $maturite;
    private $periode;
    private $departement;
    private $gravite;
    private $type;
    private $graine;
    private $fruit;
    private $chair;
    private $caractere;
    private $id_couleur;
    private $id_famille;
    private $id_principeActif;
    private $image;
    private $fam;
    private $general;

    
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
    /**
     * @return mixed
     */
    public function getId()
    {
        return intVal($this->id);
    }/**
     * @return mixed
     */
    public function setId($id)
    {
        return $this->id;
    }


    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getScienceNom()
    {
        return $this->scienceNom;
    }

    /**
     * @param mixed $scienceNom
     */
    public function setScienceNom($scienceNom)
    {
        $this->scienceNom = $scienceNom;
    }

    /**
     * @return mixed
     */
    public function getMaturite()
    {
        return $this->maturite;
    }

    /**
     * @param mixed $maturite
     */
    public function setMaturite($maturite)
    {
        $this->maturite = $maturite;
    }
    /**
     * @return mixed
     */
    public function getPeriode()
    {
        return $this->periode;
    }

    /**
     * @param mixed $periode
     */
    public function setPeriode($periode)
    {
        $this->periode = $periode;
    }

    /**
     * @return mixed
     */
    public function getDepartement()
    {
        return $this->departement;
    }

    /**
     * @param mixed $departement
     */
    public function setDepartement($departement)
    {
        $this->departement = $departement;
    }

    /**
     * @return mixed
     */
    public function getGravite()
    {
        return $this->gravite;
    }

    /**
     * @param mixed $gravite
     */
    public function setGravite($gravite)
    {
        $this->gravite = $gravite;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getGraine()
    {
        return $this->graine;
    }

    /**
     * @param mixed $graine
     */
    public function setGraine($graine)
    {
        $this->graine = $graine;
    }

    /**
     * @return mixed
     */
    public function getFruit()
    {
        return $this->fruit;
    }

    /**
     * @param mixed $fruit
     */
    public function setFruit($fruit)
    {
        $this->fruit = $fruit;
    }

    /**
     * @return mixed
     */
    public function getChair()
    {
        return $this->chair;
    }

    /**
     * @param mixed $chair
     */
    public function setChair($chair)
    {
        $this->chair = $chair;
    }

    /**
     * @return mixed
     */
    public function getCaractere()
    {
        return $this->caractere;
    }

    /**
     * @param mixed $caractere
     */
    public function setCaractere($caractere)
    {
        $this->caractere = $caractere;
    }

    /**
     * @return mixed
     */
    public function getId_couleur()
    {
        return $this->id_couleur;
    }


    public function setId_couleur($id_couleur)
    {
        $this->id_couleur = $id_couleur;
    }
      /**
     * @return mixed
     */
    public function getCouleur()
    {
        return $this->couleur;
    }


    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }
    
     /**
     * @return mixed
     */
    public function getfamille()
    {
        return $this->famille;
    }

    /**
     * @param mixed 
     */
    public function setfamille($famille)
    {
        $this->famille = $famille;
    }
    /**
     * @return mixed
     */
    public function getId_famille()
    {
        return $this->id_famille;
    }

    /**
     * @param mixed 
     */
    public function setId_famille($id_famille)
    {
        $this->id_famille = $id_famille;
    }


    /**
     * @return mixed
     */
    public function getId_principeActif()
    {
        return $this->id_principeActif;
    }

    /**
     * @param mixed 
     */
    public function setId_principeActif($id_principeActif)
    {
        $this->id_principeActif = $id_principeActif;
    }
      /**
     * @return mixed
     */
    public function getPrincipeActif()
    {
        return $this->principeActif;
    }

    /**
     * @param mixed 
     */
    public function setPrincipeActif($principeActif)
    {
        $this->principeActif = $principeActif;
    }


    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed 
     */
    public function setImage($image)
    {
        $this->image = $image;
    }


    // méthode d'ajout d'une plante
    public function insert_New()
    {
        $bdd = new Database();
        $cnx = $bdd->getCnx();
        //préparation
        $query = $cnx->prepare("INSERT INTO plante (
                                                    nom,
                                                    scienceNom,
                                                    maturite,
                                                    periode,
                                                    departement,
                                                    gravite,
                                                    `type`,
                                                    graine,
                                                    fruit,
                                                    chair,
                                                    caractere,
                                                    id_couleur,
                                                    id_famille,
                                                    id_principeActif,
                                                    `image`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

        //
        // exécution
        $inser=$query->execute(array(
            $this->nom,
            $this->scienceNom,
            $this->maturite,
            $this->periode,
            $this->departement,
            $this->gravite,
            $this->type,
            $this->graine,
            $this->fruit,
            $this->chair,
            $this->caractere,
            $this->id_couleur,
            $this->id_famille,
            $this->id_principeActif,
            $this->image
        ));
        return $inser;
    }



    // méthode de récupération des toutes les plantes
    public static function getAllPlante()
    {
        // cnx à la bdd
        $bdd = new Database();
        $cnx = $bdd->getCnx();
        //préparation
        $query = $cnx->query("SELECT id, nom, scienceNom, maturite, periode, departement, gravite, `type`, graine, fruit, chair, caractere, id_couleur, id_famille, id_principeActif, `image` FROM `plante` ORDER BY nom");
        //
        // exécution
        $plantes  = $query->fetchAll(PDO::FETCH_CLASS, "Plante");
        //
        //retour
        return $plantes;
    }


    // méthode de récupération d'une plante
    public static function getPlante(int $id)
    {
        $bdd = new Database();
        $cnx = $bdd->getCnx();
        //préparation
        $query = $cnx->prepare("SELECT id, nom, scienceNom, maturite, periode, departement, gravite, `type`, graine, fruit, chair, caractere, id_couleur, id_famille, id_principeActif, `image` FROM `plante` WHERE id = ?");
        $query->setFetchMode(PDO::FETCH_CLASS, "Plante");
        $query->execute([$id]);
        //
        // exécution
        $plante  = $query->fetch();
        //
        //retour
       // var_dump($plante);
        return $plante;
    }


    // méthode de modification d'une plante

    public function editPlante()
    {

        $bdd = new Database();
        $cnx = $bdd->getCnx();

    

        $query = $cnx->prepare('UPDATE plante SET
                        nom =?,
                        scienceNom =?,
                        maturite=?,
                        periode =?,
                        departement =?,
                        gravite=?,
                        `type` =?,
                        graine =?,
                        fruit=?,
                        chair =?,
                        caractere =?,
                        id_couleur=?,
                        id_famille=?,
                        id_principeActif=?,
                        `image`=?
                        WHERE id =?');

        $pl = $query->execute(array(
            $this->nom,
            $this->scienceNom,
            $this->maturite,
            $this->periode,
            $this->departement,
            $this->gravite,
            $this->type,
            $this->graine,
            $this->fruit,
            $this->chair,
            $this->caractere,
            $this->id_couleur,
            $this->id_famille,
            $this->id_principeActif,
            $this->image,
            $this->id
        ));
        return $pl;
        //var_dump($pl);
        

    }
    public function showPlante(int $id)
    {
        $bdd = new Database();
        $cnx = $bdd->getCnx();
        //préparation

        $query = $cnx->prepare('
        SELECT 
            plante.nom,
            scienceNom,
            maturite,
            periode,
            departement,
            gravite,
            `type`,
            graine ,
            fruit,
            chair,
            caractere,
            couleur,
            famille,
            principeActif,
            `image`
        FROM 
            plante 
        JOIN 
            couleur ON
                plante.id_couleur=couleur.id 
        JOIN 
            famille ON
                plante.id_famille=famille.id 
        JOIN 
            principeactif ON
                plante.id_principeActif=principeactif.id 
        WHERE
            plante.id = ?
    ');
        $query->setFetchMode(PDO::FETCH_CLASS, "Plante");
        $query->execute([$id]);
        //
        // exécution
        $plante  = $query->fetch();
        //
        //retour

        return $plante;
    }
    //recuperation de toutes les plantes selon une couleur precise
    public function getPlanteByCouleur(int $id)
    {
        $bdd = new Database();
        $cnx = $bdd->getCnx();
        //préparation
        $query = $cnx->prepare('SELECT plante.nom, plante.id, scienceNom, maturite, periode, departement, gravite, `type`, graine , fruit, chair, caractere, couleur, famille, principeActif, `image` 
        FROM plante 
        JOIN couleur ON plante.id_couleur=couleur.id 
        JOIN famille ON plante.id_famille=famille.id 
        JOIN principeactif ON plante.id_principeActif=principeactif.id 
        where couleur.id = ?
        GROUP BY nom');
        $query->setFetchMode(PDO::FETCH_CLASS, "Plante");
        $query->execute([$id]);
        //
        // exécution
        $plantes  = $query->fetchAll();
        //
        //retour
        return $plantes;
    }
    //recuperation de toutes les plantes selon une famille precise
    public function getPlanteByFamille(int $id)
    {
        $bdd = new Database();
        $cnx = $bdd->getCnx();
        //préparation
        $query = $cnx->prepare('SELECT plante.nom, plante.id, scienceNom, general, maturite, periode, departement, gravite, `type`, graine , fruit, chair, caractere, couleur, famille, principeActif, `image` 
        FROM plante 
        JOIN couleur ON plante.id_couleur=couleur.id 
        JOIN famille ON plante.id_famille=famille.id 
        JOIN principeactif ON plante.id_principeActif=principeactif.id 
        where famille.id = ? 
        GROUP BY nom
        ');
        $query->setFetchMode(PDO::FETCH_CLASS, "Plante");
        $query->execute([$id]);
        //
        // exécution
        $plante  = $query->fetchAll();
        //
        //retour
        return $plante;
    }
    public function getPlanteByPrincipe(int $id)
    {
        $bdd = new Database();
        $cnx = $bdd->getCnx();
        //préparation
        $query = $cnx->prepare('SELECT plante.nom, plante.id, scienceNom, maturite, periode, departement, gravite, `type`, graine , fruit, chair, caractere, couleur, famille, principeActif, `image` 
        FROM plante 
        JOIN couleur ON plante.id_couleur=couleur.id 
        JOIN famille ON plante.id_famille=famille.id 
        JOIN principeactif ON plante.id_principeActif=principeactif.id 
        where principeactif.id = ? 
        GROUP BY nom');
        $query->setFetchMode(PDO::FETCH_CLASS, "Plante");
        $query->execute([$id]);
        //
        // exécution
        $principe  = $query->fetchAll();
        //
        //retour
        return $principe;
    }
    //methode de suppression admin d'une pante
    public static function delete()
    {
        // cnx à la bdd
        $bdd = new Database();
        $cnx = $bdd->getCnx();
        $delete=htmlspecialchars($_GET['id']);
        //préparation

        if (array_key_exists('id', $_GET) && ctype_digit($delete)) {

            $query = $cnx->prepare("DELETE FROM `plante` WHERE id = ?");
            $query->execute([$delete]);

            header("Location: index.php?controller=plante&action=admin");
        }
    }

    
}

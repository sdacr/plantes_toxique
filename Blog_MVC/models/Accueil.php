<?php

class Accueil
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
    private $couleur;
    private $famille;
    private $principeActif;
    private $image;

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
    public function setFruit($Fruit)
    {
        $this->fruit = $Fruit;
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
    public function getAllPlante()
    {
        // cnx à la bdd
        $bdd = new Database();
        $cnx = $bdd->getCnx();
        //préparation
        $query = $cnx->query("SELECT id, nom, scienceNom, maturite, periode, departement, gravite, `type`, graine, fruit, chair, caractere, id_couleur, id_famille, id_principeActif, `image` 
        FROM plante");
        //
        // exécution
        $plantes  = $query->fetchAll(PDO::FETCH_CLASS, "Plante");
        //retour
        return $plantes;
    }
    public function getOnePlante($id)
    {
        $bdd = new Database();
        $cnx = $bdd->getCnx();
        //préparation
        $query = $cnx->prepare("SELECT id, nom, scienceNom, maturite, periode, departement, gravite, `type`, graine, fruit, chair, caractere, id_couleur, id_famille, id_principeActif, `image` 
        FROM plante 
        WHERE nom = ?");
        $query->setFetchMode(PDO::FETCH_CLASS, "Plante");
        $query->execute([$id]);
        //
        // exécution
        $plante  = $query->fetch();
        //
        //retour
        return $plante;
    }

    public function getAllPlanteByDate()
    {
        setlocale(LC_TIME, 'fr', 'fr_FR', 'fr_FR.ISO8859-1');
        //var_dump(strftime('%B'));
        // cnx à la bdd
        $bdd = new Database();
        $cnx = $bdd->getCnx();
        //préparation               
        $query = $cnx->prepare('SELECT id, nom, scienceNom, maturite, periode, departement, gravite, `type`, graine, fruit, chair, caractere, id_couleur, id_famille, id_principeActif, `image` 
        FROM plante  
        WHERE maturite 
        like ? 
        GROUP BY nom');
        $query->setFetchMode(PDO::FETCH_CLASS, "Plante");
        $query->execute(["%".strftime('%B')."%"]);
        //today non reconnu
        $plantes  = $query->fetchAll();
        //retour
        return $plantes;
    }

    public function getPlanteByName()
    {
        $bdd = new Database();
        $cnx = $bdd->getCnx();
        //préparation
        $find=htmlspecialchars($_POST['planti']);
        $query = $cnx->prepare('SELECT  nom, scienceNom, maturite, periode, departement, gravite, `type`, graine, fruit, chair, caractere, couleur, famille, principeActif,`image`
        FROM plante 
        JOIN  couleur ON plante.id_couleur=couleur.id 
        JOIN  famille ON plante.id_famille=famille.id 
        JOIN  principeactif ON plante.id_principeActif=principeactif.id 
        WHERE nom like ?
        ');
        $query->setFetchMode(PDO::FETCH_CLASS, "Accueil");
        $query->execute(["%".$find."%"]);
        //var_dump($query);
        //
        // exécution
        $search  = $query->fetch();
        //var_dump($search);
        //
        //retour

        return $search;
    }
}

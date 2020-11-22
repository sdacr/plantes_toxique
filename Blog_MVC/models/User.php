<?php


class User
{
    private $id;
    private $email;
    private $password;
    private $pseudo;
    private $admin;

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of birthdate
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set the value of birthdate
     *
     * @return  self
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get the value of admin
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * Set the value of admin
     *
     * @return  self
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;

        return $this;
    }

    public static function getOne($id)
    {

        $bdd = new Database();
        $cnx = $bdd->getCnx();
        //préparation
        $query = $cnx->prepare("SELECT id, pseudo, email, `password`, `admin` FROM user WHERE id = ?");
        $query->setFetchMode(PDO::FETCH_CLASS, "User");
        $query->execute([$id]);
        //
        // exécution
        $user  = $query->fetch();
        return $user;
    }


    public function findByEmail($email)
    {
        $bdd = new Database();
        $cnx = $bdd->getCnx();
        $query = $cnx->prepare('SELECT id, pseudo, email, `password`, `admin` FROM user WHERE email = ?');
        $query->setFetchMode(PDO::FETCH_CLASS, "User");
        $query->execute([$email]);
        //
        // exécution
        $user  = $query->fetch();
        return $user;
    }
    

}

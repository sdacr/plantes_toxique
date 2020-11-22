<?php


class User{
    private $id;
    private $email;
    private $password;
    private $pseudo;

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
    public function gePseudo()
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


    public static function getOne($id){
        $bdd = new Database();
        $cnx = $bdd->getCnx();
  
        $user = $cnx->prepare("SELECT * FROM user WHERE id = ?", [$id], 'User');

        //var_dump($user);die;
        return $user;

    }

}
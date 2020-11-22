<?php


class SessionVerify
{
    public function __construct()
    {
        if(session_status() != PHP_SESSION_ACTIVE)
        {
            session_start();

        }
    }


    public function create($id, $email, $pseudo, $admin)
    {
        $_SESSION['user']['id'] = $id;
        $_SESSION['user']['email'] = $email;
        $_SESSION['user']['pseudo'] = $pseudo;
        $_SESSION['user']['admin'] = $admin;
    }

    public function isAuthenticated()
    {
        if(!array_key_exists("user", $_SESSION))
        {
            return false;
        }
        return true;
    }


    public function isAdmin()
    {
        if(!$this->isAuthenticated())
        {
            return null;
        }
        return $_SESSION['user']['admin'];
    }

    public function logout(){
        unset($_SESSION['user']);
        session_destroy();
        
    }
}

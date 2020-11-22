<?php

class ConnexionController
{
    public function index(){
        $erreur = NULL;
        if (array_key_exists('email', $_POST)){
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);
            
            $userModel = new User();
            $user = $userModel->findByEmail($_POST['email']);
            
            if ($user){
               // var_dump((password_verify($_POST['password'], "1234")));
                if (password_verify($password, $user->getPassword())){
                    
                    $session=new SessionVerify(); 
                    $session->create($user->getId(), $email, $user->getPseudo(), $user->getAdmin());
                    var_dump($session);
                    if ($user->getAdmin() == 1) {
                        header('Location: index.php?controller=couleur&action=admin');
                        exit();
                    }
                }else{
                    $erreur = "Mot de passe incorrect!";
                }
                
            }else{
                $erreur = "Mail  incorrect!";
            }
            
        }
        $vue="vues/login.phtml";
        include "vues/layout.phtml";
    }
    public function logout()
    {
       
        $session= new SessionVerify();
        $session->logout();
        header('Location: index.php?controller=accueil&action=index');
        exit();
    }

   
}
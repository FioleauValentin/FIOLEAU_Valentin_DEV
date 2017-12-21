<?php

class User
{
    private $nom = "Doe";
    private $prenom = "John";
    private $email = "John.doe@domain.tld";
    private $password = "mdpsupersecure";

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom(Arme $nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
 
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
}
?>
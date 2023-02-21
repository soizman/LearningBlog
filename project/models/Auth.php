<?php
    namespace Project\Models;
    use \Core\Model;     

class Auth extends Model
{
    public function signUp($username, $email, $password, $avatar, $dateRegister)    
    {
        
        return $this->insertTable("INSERT INTO users (fullName, email, password, avatar, dateRegister) VALUES ('$username', '$email', '$password', '$avatar', '$dateRegister')");
    }

    public function signIn($email)
    {
        return $this->getQuery("SELECT * FROM users WHERE email='$email'");
    }

    public function getPasswordHash($email)
    {
        return $this->getQuery("SELECT password FROM users WHERE email = '$email'");
    }

    public function getProfile($id)
    {
        return $this->getQuery("SELECT * FROM users where id='$id'");
    }

    public function getAllUsers()
    {
        return $this->getQueryAll("SELECT * FROM users");
    }

    public function setDateVisit($dateVisit, $id)
    {
        return $this->insertTable(" UPDATE `users` SET `dateVisit` = '$dateVisit' WHERE id = '$id' ");
    }
}
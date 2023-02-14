<?php
    namespace Project\Models;
    use \Core\Model;     

class Auth extends Model
{
    public function signUp($username, $email, $password)    
    {
        
        return $this->insertTable("INSERT INTO users (fullName, email, password) VALUES ('$username', '$email', '$password')");
    }

    public function signIn($email)
    {
        return $this->getQuery("SELECT * FROM users WHERE email='$email'");
    }

    public function getPasswordHash($email)
    {
        return $this->getQuery("SELECT password FROM users WHERE email = '$email'");
    }
}
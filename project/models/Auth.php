<?php
    namespace Project\Models;
    use \Core\Model;     

class Auth extends Model
{
    public function signUp($username, $email, $password)    {
        
        return $this->insertTable("INSERT INTO users (fullName, email, password) VALUES ('$username', '$email', '$password')");
    }
}
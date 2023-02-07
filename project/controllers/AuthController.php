<?php
    namespace Project\Controllers;
    use Core\Controller,
        Project\Models\Page;

    class AuthController extends Controller
    {
        public function login()
        {
            return $this->render('auth/loginPage');
        }

        public function registration()
        {
            return $this->render('auth/registPage');
        }
    }
?>
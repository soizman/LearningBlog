<?php
    namespace Project\Controllers;
    use Core\Controller,
        Project\Models\Auth;   
    
    
    class AuthController extends Controller
    {
        private $nameImage;

        public function login()
        {   
            if(!isset($_SESSION['user'])) {
                $this->title = 'Вход';
                if(isset($_POST['submitLogin']) && isset($_POST['emailLogin']) && isset($_POST['passwordLogin'])) {
                    
                    $hash = (new Auth)->getPasswordHash($_POST['emailLogin']);

                    if(password_verify($_POST['passwordLogin'], $hash['password'])==true) {

                        $user = (new Auth)->signIn($_POST['emailLogin']);  
                        
                        $_SESSION['user'] = [

                            'id'       => $user['id'],
                            'fullname' => $user['fullName'],
                            'email'    => $user['email'],
                            'avatar'   => $user['avatar']

                        ];

                        header("Location: /");
                    } else {
                        $_SESSION['msg'] = 'Неверный логин или пароль';
                    }
                }
                return $this->render('auth/loginPage');
            } else {
                header("Location: /");
            }
        }

        protected function uploadImage($img) 
        {
            $this->nameImage = md5(uniqid()) . $img['name'];
            $tmpName = $img['tmp_name'];
            
            return move_uploaded_file($tmpName, 'project/webroot/img/uploads/' . $this->nameImage);
        }

        public function registration()
        {
            if(!isset($_SESSION['user'])) {
                $this->title = 'Регистрация';
                if(isset($_POST['submit']) && !empty($_POST['name']) && !empty($_POST['email'])) {

                    $password = $_POST['password'];
                    $passwordConfirm = $_POST['passwordConfirm'];                

                    if (strlen($password) >= 6 && strlen($passwordConfirm) >= 6) {
                        if($password === $passwordConfirm) {

                            if(!$this->uploadImage($_FILES['avatar'])) {

                                $_SESSION['msg'] = 'Изображение не загружено';
                                $this->nameImage = '';
                            }                       

                            if (!$this->validationMail($_POST['email'])) {

                                

                                $newUser = (new Auth)->signUp($_POST['name'], $_POST['email'], password_hash($password, PASSWORD_DEFAULT), $this->nameImage);

                                $user = (new Auth)->signIn($_POST['email']);  
                                
                                $_SESSION['user'] = [

                                    'id'       => $user['id'],
                                    'fullname' => $user['fullName'],
                                    'email'    => $user['email'],
                                    'avatar'   => $user['avatar']

                            ];

                                header("Location: /");

                            } else {
                                $_SESSION['msg'] = 'Данный e-mail уже зарегистрирован';
                            }
                                                
                        } else {
                            $_SESSION['msg'] = 'Пароли не совпадают';          
                        }
                    } else {
                        $_SESSION['msg'] = 'Длинна пароля должна быть более 6 символов';
                    }

                }     
            } else  {
                header("Location: /");
            }

            return $this->render('auth/registPage');           
            
        }

        protected function validationMail($email)
        {
            $currentUsers = (new Auth)->getAllUsers();
            foreach($currentUsers as $currentUser) {
                
                if($currentUser->email === $email) {

                    return true;

                } 
            }
        } 

        public function exit()
        {
            $this->title = 'Выход';
            unset($_SESSION['user']);
            header("Location: /");

            return $this->render('auth/loginPage');            
        }

    }

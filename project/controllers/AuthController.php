<?php
    namespace Project\Controllers;
    use Core\Controller,
        Project\Models\Auth;
    
    session_start();

    class AuthController extends Controller
    {
        public function login()
        {   
            if(isset($_POST['submitLogin']) && isset($_POST['emailLogin']) && isset($_POST['passwordLogin'])) {
                
                $hash = (new Auth) -> getPasswordHash($_POST['emailLogin']);

                if(password_verify($_POST['passwordLogin'], $hash['password'])==true){

                    $user = (new Auth)->signIn($_POST['emailLogin']);  
                    
                    $_SESSION['user'] = [

                        'id' => $user['id'],
                        'fullname' => $user['fullName'],
                        'email' => $user['email'],
                        'avatar' => $user['avatar']

                    ];

                    header("Location: /");
                } else {
                    $_SESSION['msg'] = 'Неверный логин или пароль';
                }
            }
            return $this->render('auth/loginPage');
        }

        public function uploadImage($img) 
        {
            $name = md5(uniqid()) . $img['name'];
            $tmpName = $img['tmp_name'];
            
            return move_uploaded_file($tmpName, 'project/uploads/' . $name);
        }

        public function registration()
        {
            if(isset($_POST['submit'])) {

                $password = $_POST['password'];
                $passwordConfirm = $_POST['passwordConfirm'];                

                if($password === $passwordConfirm) {
                    if(!$this->uploadImage($_FILES['avatar'])) {
                        $_SESSION['msg'] = 'Изображение не загружено';
                    }

                    $newUser = (new Auth)->signUp($_POST['name'], $_POST['email'], password_hash($password, PASSWORD_DEFAULT));
                    $_SESSION['msg'] = 'Вы успешно зарегистрировались!' . '<br>' . 'Перейдите на страницу ' . '<a href="/login/">авторизации</a>';
                                        
                } else {
                    $_SESSION['msg'] = 'Пароли не совпадают';                    
                }

            }           

            return $this->render('auth/registPage');           
            
        }
    }
?>  
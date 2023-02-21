<?php
    namespace Project\Controllers;
    use Core\Controller,
        Project\Models\Profile,
        Project\Models\Auth;

    class ProfileController extends Controller
    {
        public function getProfilePage()
        {
            if(isset($_SESSION['user'])) {
                $this->title = 'Профиль';
                $profile = (new Auth)->getProfile($_SESSION['user']['id']);
                
                return $this->render('profile/profilePage', [
                    'id'           => $profile['id'],
                    'fullName'     => $profile['fullName'],
                    'email'        => $profile['email'],
                    'avatar'       => $profile['avatar'],
                    'dateRegister' => $profile['dateRegister'],
                    'dateVisit'    => $profile['dateVisit']
                ]);
                
            } else {
                header("Location: /");
            }
        }

        public function saveNewAvatar()
        {    

            $nameImage = md5(uniqid()) . $_FILES['avatarImg']['name'];
            
            $tmpName = $_FILES['avatarImg']['tmp_name'];
            
            move_uploaded_file($tmpName, 'project/webroot/img/uploads/' . $nameImage);

            $imageProfile = (new Profile)->insertNewAvatar($nameImage, $_SESSION['user']['id']);
            header("Location: /profile/");

            return $this->render('profile/profilePage');
            

        }
    }
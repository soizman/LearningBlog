<?php
    namespace Project\Models;
    use \Core\Model;     

    class Profile extends Model
    {
        public function insertNewAvatar($avatar, $id)
        {
            return $this->insertTable(" UPDATE `users` SET `avatar` = '$avatar' WHERE id = '$id' ");
        }
    }
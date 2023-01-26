<?php
    namespace Project\Models;
    use \Core\Model;

    class Page extends Model
    {
        public function getByIdHomePage($id)
        {
            return $this->findOne("SELECT * FROM homepage WHERE id=$id");
        }
    }

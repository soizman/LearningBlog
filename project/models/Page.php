<?php
    namespace Project\Models;
    use \Core\Model;

    class Page extends Model
    {
        public function getByIdHomePage($id)
        {
            return $this->findOne("SELECT * FROM homepage WHERE id=$id");
        }

        public function getIdArticle()
        {
            return $this->findOne("SELECT id FROM articles ORDER BY id DESC LIMIT 1");
        }

        public function insertIntoTable($id, $titleArticle, $text)
        {
            //echo $text;die;            
            $this->insertTable("INSERT INTO articles (id, titleArticle, text) VALUES ($id, '$titleArticle', '$text')");            
        }
    }

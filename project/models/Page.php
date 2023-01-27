<?php
    namespace Project\Models;
    use \Core\Model;        

    class Page extends Model
    {
        public function getByIdHomePage($id)
        {
            return $this->getQuery("SELECT * FROM homepage WHERE id=$id");
        }

        public function getIdArticle()
        {
            return $this->getQuery("SELECT id FROM articles ORDER BY id DESC LIMIT 1");
        }

        public function insertIntoTable($titleArticle, $text)
        {                      
            $id = $this->getLastId();
            $this->insertTable("INSERT INTO articles (id, titleArticle, text) VALUES ($id, '$titleArticle', '$text')");            
        }

        public function getAllArticles()
        {
            return $this->getQueryAll("SELECT * FROM articles");
        }
    }

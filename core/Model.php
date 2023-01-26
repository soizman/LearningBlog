<?php
    namespace Core;
    use PDOException,
        PDO;

    class Model
    {
        private $link;
        private $username = 'root';
        private $password = 'root';        

        public function __construct()
        {
            if(!$this->link){
                    try {
                        $this->link = new PDO("mysql:host=localhost;dbname=blog", $this->username, $this->password);                    
                        $this->link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);                                
                    } catch(PDOException $e) {
                        return "Ошибка подключения" . $e->getMessage();
                    }
            }
        }

        protected function findOne($query)
        {
            return $row = $this->link->query($query)->fetch(PDO::FETCH_ASSOC);            
        }
    }

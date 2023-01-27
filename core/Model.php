<?php

namespace Core;

use PDOException, PDO;

class Model
{
    private $link;
    private $username = 'root';
    private $password = 'root';
    private $className = 'stdClass';

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

    protected function getLastId()
    {
        return $this->link->lastInsertId();
    }

    protected function getQuery($query)
    {
        return $this->link->query($query)->fetch(PDO::FETCH_ASSOC);   
    }

    protected function setClassName($className)
    {
        $this->className = $className;
    }

    protected function getQueryAll($query, $params = [])
    {
        $sth = $this->link->prepare($query);
        $sth->execute($params);
        return $sth->fetchAll(PDO::FETCH_CLASS, $this->className);
    }

    protected function insertTable($query)
    {
        $this->link->exec($query);
    }
    
    
}

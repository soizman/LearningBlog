<?php
    use \Core\Route;
    
    return [
        
        new Route('/home/', 'page', 'home'),
        new Route('/articles/', 'page', 'articles'),
        new Route('/article/new/', 'page', 'newArticle')
        
    ];
    

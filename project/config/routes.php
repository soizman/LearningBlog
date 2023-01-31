<?php
    use \Core\Route;
    
    return [
        new Route('/', 'page', 'home'),        
        new Route('/articles/', 'page', 'articles'),        
        new Route('/article/new/', 'article', 'newArticle'),
        new Route('/articles/:n/', 'page', 'articles')
        
    ];
    

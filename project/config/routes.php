<?php
    use \Core\Route;
    
    return [
        new Route('/', 'page', 'home'),        
        new Route('/articles/', 'page', 'articles'),        
        new Route('/article/new/', 'article', 'newArticle'),
        new Route('/articles/:n/', 'page', 'articles'),
        new Route('/login/', 'auth', 'login'),
        new Route('/registration/', 'auth', 'registration'),
        new Route('/exit/', 'auth', 'exit'),
        new Route('/profile/', 'profile', 'getProfilePage'),
        new Route('/profile/newimg/', 'profile', 'saveNewAvatar')
    ];
    

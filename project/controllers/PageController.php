<?php
    namespace Project\Controllers;
    use Core\Controller,
        Project\Models\Page;

    class PageController extends Controller
    {
        public function home()
        {
            $page = (new Page)->getByIdHomePage(rand(1,8));

            $this->title = 'Главная';
            return $this->render('home/homePage', [
                'author' => $page['author'],
                'text'   => $page['text']
            ]);
        }

        public function articles()
        {
            $this->title = 'Статьи';
            return $this->render('articles/articlesPage', []);
        }        
    }


?>
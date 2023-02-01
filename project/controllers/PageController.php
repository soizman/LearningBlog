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

        public function articles($num)
        {   
            if(isset($num['n']))
            {
                $page = $num['n'];
            } else {
                $page = 1;
            }            
            
            $notesOnPage = 3;
            $from = ($page - 1) * $notesOnPage;
            $countEntry = (new Page)->countEntryTable(); //["count"]
            $pagesCount = ceil($countEntry["count"] / $notesOnPage);          
           
            
            $allArticles = (new Page)->getAllArticles($from, $notesOnPage);
            $this->title = 'Статьи';
            return $this->render('articles/articlesPage', [

                'allArticles' => $allArticles,
                'pagesCount'  => $pagesCount,
                'page'        => $page

            ]);        
        }
    }
?>
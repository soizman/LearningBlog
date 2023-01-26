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

        public function newArticle()
        {
            if($_REQUEST['submit'] && !empty($_REQUEST['titleArticle']) && !empty($_REQUEST['text'])) {
                $id = (new Page)->getIdArticle();                
                $newArticle = (new Page)->insertIntoTable($id['id']+1, $_REQUEST['titleArticle'], $_REQUEST['text']);
                $this->title = 'Запись добавлена';
                return $this->render('articles/articleAdded', []);
            } else {
                $this->title = 'Статьи';
                return $this->render('articles/articlesPage', []);
            }
        }
    }


?>
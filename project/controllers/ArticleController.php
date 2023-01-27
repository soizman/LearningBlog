<?php
    namespace Project\Controllers;
    use Core\Controller,
        Project\Models\Page;

    class ArticleController extends Controller
    {
        public function newArticle()
        {
            if($_REQUEST['submit'] && !empty($_REQUEST['titleArticle']) && !empty($_REQUEST['text'])) {                               
                $newArticle = (new Page)->insertIntoTable($_REQUEST['titleArticle'], $_REQUEST['text']);
                $this->title = 'Запись добавлена';
                return $this->render('articles/articleAdded', []);
            } else {
                $this->title = 'Статьи';
                return $this->render('articles/articlesPage', []);
            }
        }
    }


?>
<div class="artic">
    <div class="container">
        <div class="row">
            <div class="com-md-8" style="padding: 5% 0 5% 0;">                
            <?php foreach ($data as $article):?>
                <div class="shadow p-3 mb-5 bg-body rounded" style="--bs-bg-opacity: .5;"> 
                    <p class="articleName"><b><?= $article->titleArticle  ?></b></p>             
                    <p><?= preg_match("/^(.{150,}?)\s+/s", $article->text, $m) ? $m[1] : $article->text;?></p>
                    <button type="button" class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#ArticleModal" style="text-align: left;">
                        Читать далее...
                    </button>
                    <p id="datePost"><?= date("F j, Y, g:i a",strtotime($article->today)) ?></p>
                </div>
            <?php endforeach ?>
            <!-- Модальное окно -->
                <div class="modal fade" id="ArticleModal" tabindex="-1" aria-labelledby="ArticleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ArticleModalLabel"><?= $article->titleArticle  ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                        </div>
                        <div class="modal-body">
                            <?= $article->text ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                            <button type="button" class="btn btn-primary">Сохранить изменения</button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h2>Предложить статью</h2>
    <form method="POST" action="/article/new/">        
        <input type="Тема" class="form-control" id="FormInputTitle" placeholder="Тема" name="titleArticle">        
        <textarea class="form-control" id="inputText" placeholder="Текст статьи" rows="6" name="text"></textarea>    
        <input type="submit" class="form-control button-send" name="submit" value="Отправить">    
    </form>
</div>
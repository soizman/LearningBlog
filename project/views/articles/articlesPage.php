<div class="artic">
    <div class="container">
        <div class="row">
            <div class="com-md-8" style="padding: 5% 0 5% 0;">                
            <?php foreach ($data as $article):?>
                <div class="shadow p-3 mb-5 bg-body rounded" style="--bs-bg-opacity: .5;"> 
                    <p class="articleName"><b><?= $article->titleArticle  ?></b></p>             
                    <p><?= preg_match("/^(.{100,}?)\s+/s", $article->text, $m) ? $m[1] . '...' : $article->text;?></p>
                    <p><?= $article->today ?></p>
                </div>
            <?php endforeach ?>
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
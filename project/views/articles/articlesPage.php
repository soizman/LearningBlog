<div class="artic">
    <div class="container">
        <div class="row">
            <div class="com-md-8">                
            <?php foreach ($data as $article):?>
                <div class=" shadow p-3 mb-5 bg-body rounded" style="--bs-bg-opacity: .5;"> 
                    <h4><?= $article->titleArticle ?></h4>             
                    <p><?= $article->text ?></p>
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
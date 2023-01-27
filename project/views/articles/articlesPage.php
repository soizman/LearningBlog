<div class="artic">
    <?php foreach ($data as $article):?>
        <h3><?= $article->titleArticle ?></label></h3>
        <p><?= $article->text ?></p>
    <?php endforeach ?>
    <h2>Предложить статью</h2>
    <form method="POST" action="/article/new/">        
        <input type="Тема" class="form-control" id="FormInputTitle" placeholder="Тема" name="titleArticle">        
        <textarea class="form-control" id="inputText" placeholder="Текст статьи" rows="6" name="text"></textarea>    
        <input type="submit" class="form-control button-send" name="submit" value="Отправить">    
    </form>
</div>
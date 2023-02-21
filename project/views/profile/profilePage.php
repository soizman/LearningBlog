
<div class="content">
    <div class="profileInfo">        
        <div class="avt">
            <?php if(!empty($avatar)):?>
            <span class="circle"><img class="avatarProfile" src="/project/webroot/img/uploads/<?=$avatar?>"></span>
            <?php else:?>
            <span class="circle"><img class="avatarProfile" src="/project/webroot/img/profile.png"></span>
            <?php endif;?><br>  
            <form method="POST" action="/profile/newimg/" enctype="multipart/form-data">       
                <label for="avatarImg" class="form-label">Изменить изображение профиля</label>
                <input type="file" accept="image/png, image/gif, image/jpeg" class="form-control" id="avatarImg" name="avatarImg" style="width: 50%; margin-left: 25%;"><br>
                <button type="submit" class="btn btn-dark" name="submit">Отправить</button>
            </form>        
        </div>
        <div class="info">
                <p class="hprof">Профиль</p>                
                <p>Имя пользвоателя: <label style="font-weight: bolder;"><?= $fullName ?></label></p> 
                <p>E-mail: <label style="font-weight: bolder;"><?= $email ?></label></p>
                <p>Дата последнего визита: <label style="font-weight: bolder;"></label></p>
                <p>Дата регистрации: <label style="font-weight: bolder;"></label></p>
                <a href="/exit/" class="exit">Выход</a>             
                
        </div>
    </div>
</div>

<div class="content">
    <div class="profileInfo">        
        <div class="avt">
            <?php if(!empty($avatar)):?>
            <span class="circle"><img class="avatarProfile" src="/project/webroot/img/uploads/<?=$avatar?>"></span>
            <?php else:?>
            <span class="circle"><img class="avatarProfile" src="/project/webroot/img/profile.png"></span>
            <?php endif;?>
        </div>
        <div class="info">
                <p class="hprof">Профиль</p>
                <p>Имя пользвоателя: <label style="font-weight: bolder;"><?= $fullName ?></label></p> 
                <p>E-mail: <label style="font-weight: bolder;"><?= $email ?></label></p>
                <p>Дата последнего визита: <label style="font-weight: bolder;"></label></p>
                <p>Дата регистрации: <label style="font-weight: bolder;"></label></p>
                <button type="button" class="btn btn-dark">Выйти</button>
        </div>
    </div>
</div>
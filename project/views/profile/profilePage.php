<h1>Профиль</h1>

<h2>Имя пользовтеля: <?= $fullName ?></h2>
<h2>E-mail: <?= $email ?></h2>
<?php if(!empty($avatar)):?>
<img src="/project/webroot/img/uploads/<?=$avatar?>">
<?php else:?>
<img src="/project/webroot/img/profile.png">
<?php endif;?>
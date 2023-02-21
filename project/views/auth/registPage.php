<div class="auth">
    <form method="POST" enctype="multipart/form-data">  
        <div class="mb-3">
            <label for="InputName" class="form-label">Имя пользователя</label>
            <input type="text" class="form-control" id="InputName" aria-describedby="emailHelp" name="name" required placeholder="Введите имя пользователя">    
        </div>  
        <div class="mb-3">
            <label for="InputEmail" class="form-label">Адрес электронной почты</label>
            <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" name="email" required placeholder="Введите e-mail">    
        </div>
        <div class="mb-3">
            <label for="avatar" class="form-label">Изображение профиля</label>
            <input type="file" accept="image/png, image/gif, image/jpeg" class="form-control" id="avatar" name="avatar">
        </div>
        <div class="mb-3">
            <label for="InputPassword1" class="form-label">Пароль</label>
            <input type="password" class="form-control" id="InputPassword1" name="password" required placeholder="Введите пароль">
        </div>
        <div class="mb-3">
            <label for="InputPassword2" class="form-label">Повторите пароль</label>
            <input type="password" class="form-control" id="InputPassword2" name="passwordConfirm" required placeholder="Повторно введите пароль">
        </div>        
        <button type="submit" class="btn btn-dark" name="submit">Отправить</button>
        <p>Уже есть аккаунт? - <a href="/login/">войдите</a></p>
        <?php if(!empty($_SESSION['msg'])):?>   
            <p class="msg"><?= $_SESSION['msg'] ?></p>
        <?php endif; unset($_SESSION['msg']);?>             
    </form>
</div>
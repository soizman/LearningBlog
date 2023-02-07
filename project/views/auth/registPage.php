<div class="auth">
    <form method="POST">  
        <div class="mb-3">
            <label for="InputName" class="form-label">Имя пользователя</label>
            <input type="text" class="form-control" id="InputName" aria-describedby="emailHelp" name="name" placeholder="Введите имя пользователя">    
        </div>  
        <div class="mb-3">
            <label for="InputEmail" class="form-label">Адрес электронной почты</label>
            <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" name="email" placeholder="Введите e-mail">    
        </div>
        <div class="mb-3">
            <label for="imgProfile" class="form-label">Изображение профиля</label>
            <input type="file" class="form-control" id="imgProfile" name="imgProfile" placeholder="Введите пароль">
        </div>
        <div class="mb-3">
            <label for="InputPassword1" class="form-label">Пароль</label>
            <input type="password" class="form-control" id="InputPassword1" name="password" placeholder="Введите пароль">
        </div>
        <div class="mb-3">
            <label for="InputPassword2" class="form-label">Повторите пароль</label>
            <input type="password" class="form-control" id="InputPassword2" name="password" placeholder="Повторно ввидите пароль">
        </div>        
        <button type="submit" class="btn btn-dark" name="submit">Отправить</button>
        <p>Уже есть аккаунт? - <a href="/login/">войдите</a></p>
    </form>
</div>
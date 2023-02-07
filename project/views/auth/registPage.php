<div class="auth">
    <form method="POST">    
        <div class="mb-3">
            <label for="InputEmail" class="form-label">Адрес электронной почты</label>
            <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" name="email">    
        </div>
        <div class="mb-3">
            <label for="InputPassword1" class="form-label">Пароль</label>
            <input type="password" class="form-control" id="InputPassword1" name="password">
        </div>
        <div class="mb-3">
            <label for="InputPassword2" class="form-label">Повторите пароль</label>
            <input type="password" class="form-control" id="InputPassword2" name="password">
        </div>        
        <button type="submit" class="btn btn-dark" name="submit">Отправить</button>
        <p>Уже есть аккаунт? - <a href="/login/">войдите</a></p>
    </form>
</div>
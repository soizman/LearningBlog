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
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="Check" name="check">
            <label class="form-check-label" for="Check">Запомнить меня</label>
        </div>
        <button type="submit" class="btn btn-dark" name="submit">Отправить</button>
        <p>У вас нет аккаунта? - <a href="/registration/">Зарегистрируйтесь</a></p>
    </form>
</div>
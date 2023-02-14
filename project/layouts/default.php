
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/project/webroot/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://kit.fontawesome.com/e9b54647e9.css" crossorigin="anonymous">  
    <title><?= $title ?></title>
</head>
<body>
  <div class="wrapper">
    <header>
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">        
            <div class="container-fluid">
              <a class="navbar-brand" href="/"><i class="fa-solid fa-graduation-cap"></i>Learning blog</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Переключатель навигации">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link" aria-current="page" href="/">Главная</a>
                  <a class="nav-link" href="/articles/">Статьи</a>
                  <a class="nav-link" href="#">Работы</a>
                  <a class="nav-link" href="#">Обратная связь</a>                  
                </div>

                <div class="btn-group btnAuth" style="padding-left: 10%;">
                    <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user"></i>
                    </button>
                    <ul class="dropdown-menu bg-dark" style="margin-left: 50%;">
                      <?php session_start(); if(!empty($_SESSION['user'])):?>
                        <li><a class="dropdown-item bg-dark text-light" href="#"><?= $_SESSION['user']['fullname'];?></a></li>
                        <li><a class="dropdown-item bg-dark text-light" href="#">Выход</a></li>
                      <?php else:?>
                        <li><a class="dropdown-item bg-dark text-light" href="/login/">Вход</a></li>
                        <li><a class="dropdown-item bg-dark text-light" href="/registration/">Регистрация</a></li>
                      <?php endif;?>
                    </ul>
                </div>               
              </div>
            </div>
          </nav>
    </header>           
      <main>
          <?= $content ?>        
      </main>    
    <footer>
        <div class="container">
            <div class="d-flex justify-content-between">
                <div class="footer-left">
                    <a href="#">Terms and condition</a>
                    <a href="#">Privicy</a>
                </div>
                <div class="footer-right">
                    <span>Follow</span>
                    <a href="https://github.com/soizman"><i class="fa-brands fa-github"></i></a>
                    <a href="#"><i class="fa-brands fa-google"></i></a>
                </div>
            </div>
        </div>
    </footer>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/e9b54647e9.js" crossorigin="anonymous"></script>
</body>
</html>
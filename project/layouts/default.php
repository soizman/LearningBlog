<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/project/webroot/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha256-wLz3iY/cO4e6vKZ4zRmo4+9XDpMcgKOvv/zEU3OMlRo=" crossorigin="anonymous">
    <link rel="stylesheet" href="https://kit.fontawesome.com/e9b54647e9.css" crossorigin="anonymous">    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha256-m81NDyncZVbr7v9E6qCWXwx/cwjuWDlHCMzi9pjMobA=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e9b54647e9.js" crossorigin="anonymous"></script>
    <title><?= $title ?></title><!-- Указать title при переносе шаблона-->
</head>
<body>
  <div class="wrapper" style="background-image: url(/project/webroot/img/background.jpg) ">
    <header>
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="/home/"><i class="fa-solid fa-graduation-cap"></i>Learning blog</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Переключатель навигации">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link" aria-current="page" href="/home/">Главная</a>
                  <a class="nav-link" href="#">Статьи</a>
                  <a class="nav-link" href="#">Работы</a>
                  <a class="nav-link" href="#">Обратная связь</a>                  
                </div>
                <a class="nav-link" href="#" style="padding-left: 10%; color: aliceblue;""><i class="fa-solid fa-user"></i></a>
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
                    <a href="#"><i class="fa-brands fa-github"></i></a>
                    <a href="#"><i class="fa-brands fa-google"></i></a>
                </div>
            </div>
        </div>
    </footer>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha256-m81NDyncZVbr7v9E6qCWXwx/cwjuWDlHCMzi9pjMobA=" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/e9b54647e9.js" crossorigin="anonymous"></script>
</body>
</html>
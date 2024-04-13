<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quem Somos</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: Arial, sans-serif;
    }

    h1 {
      font-size: 50px;
      color: rgb(141, 70, 189);
      margin-top: 50px;
      margin-bottom: 50px;
      text-align: center;
      font-family: 'Caveat', cursive;
    }

    p {
      color: white;
      text-align: center;
    }

    ul {
      color: rgb(206, 146, 255);
    }

    li {
      text-align: center;
    }

    nav {
      background-color: #410a66;
      color: #fff;
      text-align: center;
      padding: 10px;
    }

    nav a {
      color: #fff;
      text-decoration: none;
      padding: 14px 20px;
      margin-right: 5cm;
    }

    nav a:last-child {
      margin-right: 0;
    }

    nav a:hover {
      background-color: #cb93f8;
    }

    footer {
      background-color: #333;
      color: #fff;
      text-align: center;
      padding: 5px;
      position: fixed;
      bottom: 0;
      width: 100%;
      font-size: 12px;
    }

    @media (max-width: 600px) {
      nav {
        max-width: 300px;
        margin: 0 auto;
      }
    }
  </style>
</head>
<body>
<nav>
    <a href="/">Voltar para home</a>
    <a href="/paginainicial">Página Inicial</a>
    <a href="/quemsomos">Quem Somos</a>
    <a href="/noticias">Notícias</a>
    <a href="/contato">Contato</a>
</nav>

<h1>Notícias</h1>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="carousel-caption d-none d-md-block">
                <h3>Termina às 15 horas prazo para pedir isenção e redução da taxa do Vestibular das Fatecs</h3>
            </div>
        </div>
        <div class="carousel-item">
            <div class="carousel-caption d-none d-md-block">
                <h3>Texto expandido da Notícia 2</h3>
            </div>
        </div>
        <div class="carousel-item">
            <div class="carousel-caption d-none d-md-block">
                <h3>Texto expandido da Notícia 3</h3>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
    </a>
</div>

<footer>
    <p>&copy; 2024 Notícias</p>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        $('.read-more').click(function(){
            var expandedText = $(this).data('text');
            $(this).siblings('p').text(expandedText);
        });
    });
</script>

</body>
</html>

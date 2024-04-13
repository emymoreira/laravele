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
    font-size: 60px;
      color: rgb(141, 70, 189);
      margin-top: 50px;
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

  @media (max-width: 600px) {
    nav {
      max-width: 300px;
      margin: 0 auto;
    }
  }

  .social-links {
    display: flex;
    justify-content: center;
    margin-top: 20px;
  }

  .social-links button {
    margin: 0 10px;
    padding: 10px 20px;
    background-color: #eb8c11;
    color: #fff;
    border: none;
    border-radius: 20px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .social-links button:hover {
    background-color: #f55f31;
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

<h1>Redes Sociais</h1>

<div class="social-links">
  <button onclick="window.open('https://twitter.com/paulasouzasp', '_blank')">Twitter</button>
  <button onclick="window.open('https://www.facebook.com/centropaulasouza/', '_blank')">Facebook</button>
  <button onclick="window.open('https://www.instagram.com/centropaulasouza/', '_blank')">Instagram</button>
  <button onclick="window.open('https://br.linkedin.com/company/centropaulasouza', '_blank')">Linkedin</button>
  <button onclick="window.open('https://www.youtube.com/user/centropaulasouzasp', '_blank')">Youtube</button>
  <button onclick="window.open('https://www.tiktok.com/@centropaulasouza', '_blank')">TikTok</button>
</div>

</body>
</html>

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

  label {
    color: purple;
  }

  .custom-button{
    color: purple;
    background-color: grey;
    border: none;
    border-radius: 20px;
  }

  .custom-button:hover{
    background-color: ;
    color:black;

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

<h1>Formulário de Contato</h1>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card" style="border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <div class="card-body">
          <form id="form-contato">
            <div class="form-group">
              <label for="nome" style="font-weight: bold;">Nome</label>
              <input id="nome" type="text" class="form-control" style="border-radius: 5px;" required>
            </div>

            <div class="form-group">
              <label for="telefone" style="font-weight: bold;">Telefone</label>
              <input id="telefone" type="tel" class="form-control" style="border-radius: 5px;" required>
            </div>

            <div class="form-group">
              <label for="email" style="font-weight: bold;">E-mail</label>
              <input id="email" type="email" class="form-control" style="border-radius: 5px;" required>
            </div>

            <div class="form-group">
              <label for="mensagem" style="font-weight: bold;">Mensagem</label>
              <textarea id="mensagem" class="form-control" style="border-radius: 5px;" rows="5" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary btn-block custom-button"  >Enviar Mensagem</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>



<script>
  document.getElementById('form-contato').addEventListener('submit', function(event) {
    event.preventDefault();

      
    var nome = document.getElementById('nome').value.trim();
    var telefone = document.getElementById('telefone').value.trim();
    var email = document.getElementById('email').value.trim();
    var mensagem = document.getElementById('mensagem').value.trim();


    if (nome === '' || telefone === '' || email === '' || mensagem === '') {
      alert('Por favor, preencha todos os campos.');
      return;
    }

    if (!isValidEmail(email)) {
      alert('Por favor, insira um e-mail válido.');
      return;
    }


  });


  function isValidEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
  }
</script>
</body>
</html>

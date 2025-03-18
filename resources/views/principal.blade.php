<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adoção de Animais - CarrosselPets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      /* Definindo esquema de cores */
      body {
        background-color: #f0f8ff; /* Azul claro para o fundo */
        display: flex;
        flex-direction: column;
        min-height: 100vh; /* Garante que a altura mínima ocupe a tela toda */
      }
      .navbar {
        background-color: #4CAF50; /* Verde */
      }
      .navbar-brand {
        color: white;
      }
      .navbar-nav .nav-link {
        color: white;
      }
      .navbar-nav .nav-link:hover {
        color: #ffeb3b; /* Amarelo suave ao passar o mouse */
      }
      .header {
        text-align: center;
        margin-top: 50px;
        color: #4CAF50; /* Verde */
      }
      .container {
        margin-top: 30px;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        flex-grow: 1; /* Garante que o conteúdo ocupe o espaço disponível */
      }
      .btn-custom {
        background-color: #4CAF50;
        color: white;
      }
      .btn-custom:hover {
        background-color: #388E3C;
      }
      footer {
        background-color: #4CAF50;
        color: white;
        text-align: center;
        padding: 10px 0;
        margin-top: 20px;
      }
      .pet-card {
        margin-bottom: 20px;
      }
      .pet-card img {
        width: 100%;
        height: auto;
        border-radius: 10px;
      }
      .pet-card-title {
        font-size: 1.25rem;
        font-weight: bold;
        color: #4CAF50;
      }
    </style>
  </head>
  <body>
    <!-- Barra de navegação -->
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('principal') }}">CarrosselPets</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('principal') }}">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('registrar') }}">Registrar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Sobre</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Cabeçalho -->
    <div class="header">
      <h1>Adoção de Animais</h1>
      <p>Encontre um amigo fiel para sua vida!</p>
    </div>

    <!-- Conteúdo principal -->
    <div class="container">
      <h2>Adote um Pet</h2>
      <p>Faça a diferença na vida de um animal abandonado! Se você está interessado em adotar um animal, preencha o formulário de cadastro ou entre em contato conosco para mais informações.</p>
      <button class="btn btn-custom">Adote Agora</button>
    </div>

    <!-- Seção de Animais para Adoção -->
    <div class="container">
      <h2>Animais Disponíveis para Adoção</h2>
      <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4 pet-card">
          <div class="card">
            <img src="https://images.pexels.com/photos/1108099/pexels-photo-1108099.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Pet 1">
            <div class="card-body">
              <h5 class="pet-card-title">Nome do Pet 1</h5>
              <p class="card-text">Descrição curta do Pet 1. Esse animal é amigável, adora brincar e está em busca de um lar.</p>
              <button class="btn btn-custom w-100">Adote este Pet</button>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4 pet-card">
          <div class="card">
            <img src="https://images.pexels.com/photos/160709/raccoon-animal-animal-world-wildlife-photography-160709.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Pet 2">
            <div class="card-body">
              <h5 class="pet-card-title">Nome do Pet 2</h5>
              <p class="card-text">Descrição curta do Pet 2. Esse animal é muito carinhoso e precisa de uma família para dar amor.</p>
              <button class="btn btn-custom w-100">Adote este Pet</button>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4 pet-card">
          <div class="card">
            <img src="https://images.pexels.com/photos/977951/pexels-photo-977951.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Pet 3">
            <div class="card-body">
              <h5 class="pet-card-title">Nome do Pet 3</h5>
              <p class="card-text">Descrição curta do Pet 3. Esse pet é ideal para famílias com crianças. Muito amigável e brincalhão!</p>
              <button class="btn btn-custom w-100">Adote este Pet</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Rodapé fixo no fundo -->
    <footer>
      <p>CarrosselPets &copy; 2025. Todos os direitos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro - CarrosselPets</title>
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
        padding: 40px;
        flex-grow: 1; /* Garante que o conteúdo ocupe o espaço disponível */
        max-width: 500px;
        margin-left: auto;
        margin-right: auto;
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
              <a class="nav-link" href="{{ route('principal') }}">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('registrar') }}">Registrar</a>
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
      <h1>Registro</h1>
      <p>Crie uma conta para adotar um animal!</p>
    </div>

    <!-- Formulário de Registro -->
    <div class="container">
      <h2>Crie sua Conta</h2>
      <form>
        <div class="mb-3">
          <label for="nome" class="form-label">Nome Completo</label>
          <input type="text" class="form-control" id="nome" placeholder="Digite seu nome completo" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Digite seu email" required>
        </div>
        <div class="mb-3">
          <label for="senha" class="form-label">Senha</label>
          <input type="password" class="form-control" id="senha" placeholder="Digite sua senha" required>
        </div>
        <div class="mb-3">
          <label for="confirmarSenha" class="form-label">Confirmar Senha</label>
          <input type="password" class="form-control" id="confirmarSenha" placeholder="Confirme sua senha" required>
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="aceitoTermos" required>
          <label class="form-check-label" for="aceitoTermos">Eu aceito os termos e condições.</label>
        </div>
        <button type="submit" class="btn btn-custom w-100">Registrar</button>
        <div class="mt-3 text-center">
          <p>Já tem uma conta? <a href="#">Faça login aqui</a></p>
        </div>
      </form>
    </div>

    <!-- Rodapé fixo no fundo -->
    <footer>
      <p>CarrosselPets &copy; 2025. Todos os direitos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

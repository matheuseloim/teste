<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>    
    <title>Tela de cadastro (CRUD)</title>
   
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <main class="form-signin w-100 m-auto">
        <form>
          <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
          <h1 class="h3 mb-3 fw-normal">Cadastro de usuários</h1>

          <div class="form-floating">
            <input type="text" class="form-control" id="nome" name="nome">
            <label>Nome</label>
          </div>
          <div class="form-floating">
            <input type="email" class="form-control" id="email" name="email">
            <label>E-mail</label>
          </div>
          <div class="form-floating">
            <input type="text" class="form-control" id="whastapp" name="whastapp">
            <label>WhatsApp</label>
          </div>
          <br>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Cadastrar</button>
          <p id="anoAtual" class="mt-5 mb-3 text-muted">&copy; </p>
        </form>
      </main>
      <script src="javascript/principal.js"></script>
</body>
</html>




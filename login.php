<!doctype html>
<html lang="en" class="h-100">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <script src="cadastro.js"></script>
  <title>Login</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Bootstrap core CSS -->
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="cover.css" rel="stylesheet">
</head>

<body class="d-flex h-100 text-center text-white bg-dark">
  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">
      <div>
        <h3 class="float-md-start mb-0">Login</h3>
        <nav class="nav nav-masthead justify-content-center float-md-end">
          <a class="nav-link" href="index.php">Página Inicial</a>
          <a class="nav-link" href="cadastro.php">Cadastre-se</a>
          <a class="nav-link active" aria-current="page" href="login.php">Login</a>
        </nav>
      </div>
    </header>

    <main class="px-3">
      <div class="p-3 mb-2">
        <form class="row g-3 ">

          <div class="col-6">
            <label for="inputZip" class="form-label">E-mail</label><br>
            <input type="text" class="form-control border border-info rounded-1 " id="email" placeholder="name@example.com"><br>
          </div>

          <div class="col-6">
            <label for="senha" class="form-label">Senha</label><br>
            <input type="password" class="form-control border border-info rounded-1" id="password"><br>
          </div>

          <button type="button" onclick="ValidarLogin()">Login</button>
      </div>
    </main>

    <footer class="mt-auto text-white-50">
      <p>Cover template for <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, by <a href="https://twitter.com/mdo" class="text-white">@mdo</a>.</p>
    </footer>
  </div>
</body>

</html>
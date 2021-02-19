<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <title>Página inicial</title>
</head>

<body>
  <?php require('topo.html') ?>

  <div class="container">
    <div class="row">
      <h1>Informática</h1>
      <div class="col">
        <button class="btn btn-success">
          1° Ano A
        </button>
        <button class="btn btn-success">
          2° Ano A
        </button>
        <button class="btn btn-success">
          3° Ano A
        </button>
      </div>
    </div>
    <div class="row">
      <h1>Enfermagem</h1>
      <div class="col">
        <button class="btn btn-success">
          1° Ano B
        </button>
        <button class="btn btn-success">
          2° Ano B
        </button>
        <button class="btn btn-success">
          3° Ano B
        </button>
      </div>
    </div>
    <div class="row">
      <h1>Regência</h1>
      <div class="col">
        <button class="btn btn-success">
          1° Ano C
        </button>
        <button class="btn btn-success">
          2° Ano C
        </button>
        <button class="btn btn-success">
          3° Ano C
        </button>
      </div>
    </div>
  </div>
  <?php require('footer.html') ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>
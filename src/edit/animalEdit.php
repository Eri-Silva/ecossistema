<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>animais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

    <div class="container">
    <form action="../database/animal/animalEditDB.php" method="post">
  <div class="form-group">

    <label for="formGroupExampleInput">Id</label>
    <input type="number" name="id_edit" class="form-control" id="formGroupExampleInput" placeholder="Ex: 1, 2, etc." required>

    <h2>Novos dados desse animal: </h2>

    <label for="formGroupExampleInput">Nome</label>
    <input type="text" name="ani_animal" class="form-control" id="formGroupExampleInput" placeholder="Ex: Arara-azul-grande" required>

    <label for="formGroupExampleInput">Nome Científico</label>
    <input type="text" name="ani_nomecientifico" class="form-control" id="formGroupExampleInput" placeholder="Ex: Anodorhynchus hyacinthinus" required>

    <label for="formGroupExampleInput">Expectativa de vida</label>
    <input type="text" name="ani_expectvida" class="form-control" id="formGroupExampleInput" placeholder="Ex: 18, 19, etc." required>

    <label for="formGroupExampleInput">Alimentação</label>
    <input type="text" name="ani_alimentacao" class="form-control" id="formGroupExampleInput" placeholder="Ex: Herbívoro, Carnívoro ou Onívoro" required>

    <label for="formGroupExampleInput">Id do Bioma</label>
    <input type="number" name="ani_bio_id" class="form-control" id="formGroupExampleInput" placeholder="Ex: 1, 2, etc." required>
  </div>
  <button class="btn btn-primary">Editar Animal</button></a></button>
</form>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
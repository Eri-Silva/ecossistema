<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>biomas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    
    <div class="container">
    <form action="../database/bioma/biomaEditDB.php" method="post">
  <div class="form-group">

    <label for="formGroupExampleInput">Id</label>
    <input type="text" name="id_edit" class="form-control" id="formGroupExampleInput" placeholder="Ex: 1, 2, etc." required>

    <h2>Novos dados desse bioma: </h2>

    <label for="formGroupExampleInput">Bioma: </label>
    <input type="text" name="bio_bioma" class="form-control" id="formGroupExampleInput" placeholder="Ex: Caatinga, Pantana, etc." required>

    <label for="formGroupExampleInput">Clima: </label>
    <input type="text" name="bio_clima" class="form-control" id="formGroupExampleInput" placeholder="Ex: Tropical, Frio, etc." required>

    <label for="formGroupExampleInput">Vegetação: </label>
    <input type="text" name="bio_vegetacao" class="form-control" id="formGroupExampleInput"placeholder="Ex: Floresta temperada, Estepe, etc." required>

  <button class="btn btn-primary">Finaizar edição</button></a></button>
</form>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
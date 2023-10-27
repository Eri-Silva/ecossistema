<?php
$id_delete = $_POST['id_delete'];


$conn = new PDO('mysql:host=127.0.0.1:3306;dbname=db_ecossistema', 'root', 'mjsm2004');

try {

  // sql to delete a record
  $sql = "DELETE FROM tb_animais WHERE ani_id='$id_delete'";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "<center><h1> Animal deletado com sucesso </h1></center> <a href='/'><button>Home</button></a>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

?>



<?php
$id_edit = $_POST['id_edit'];
$ani_animal = $_POST['ani_animal'];
$ani_nomecientifico = $_POST['ani_nomecientifico'];
$ani_expectvida = $_POST['ani_expectvida'];
$ani_alimentacao = $_POST['ani_alimentacao'];
$ani_bio_id = $_POST['ani_bio_id'];

$conn = new PDO('mysql:host=127.0.0.1:3306;dbname=db_ecossistema', 'root', 'mjsm2004');

try {
 
  $sql = "UPDATE tb_animais SET ani_animal=
  '".$ani_animal."',ani_nomecientifico='".$ani_nomecientifico."', ani_expectvida='".$ani_expectvida."', ani_alimentacao='".$ani_alimentacao."',ani_bio_id='".$ani_bio_id."' 
  WHERE ani_id='$id_edit'";

  // Prepare statement
  $stmt = $conn->prepare($sql);
  // execute the query
  $stmt->execute();
  // echo a message to say the UPDATE succeeded
  echo  "<center><h1>Edição de animal concluída </h1></center>  <a href='/'><button class='btn btn-info'>Home</button></a>";

  // $stmt->rowCount() .

} catch(PDOException $e) {
    
  echo $sql . "<br>" . $e->getMessage();
  echo'<h1>Não deu Certo</h1>';
}
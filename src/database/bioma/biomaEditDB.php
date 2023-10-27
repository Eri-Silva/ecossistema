<?php
$id_edit = $_POST['id_edit'];
$bio_bioma = $_POST['bio_bioma'];
$bio_clima = $_POST['bio_clima'];
$bio_vegetacao = $_POST['bio_vegetacao'];


$conn = new PDO('mysql:host=127.0.0.1:3306;dbname=db_ecossistema', 'root', 'mjsm2004');

try {
 

  $sql = "UPDATE tb_biomas SET bio_bioma=
  '".$bio_bioma."',bio_clima='".$bio_clima."', bio_vegetacao='".$bio_vegetacao."'
  WHERE bio_id='$id_edit'";

  // Prepare statement
  $stmt = $conn->prepare($sql);
  // execute the query
  $stmt->execute();
  // echo a message to say the UPDATE succeeded
  echo  "<center><h1>Edição de bioma concluída </h1></center>  <a href='/'><button class='btn btn-info'>Home</button></a>";
} catch(PDOException $e) {
    
  echo $sql . "<br>" . $e->getMessage();
  echo"<center><h1> Erro </h1></center> ";
}
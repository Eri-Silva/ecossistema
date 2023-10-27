<?php

$bio_bioma = $_POST['bio_bioma'];
$bio_clima = $_POST['bio_clima'];
$bio_vegetacao = $_POST['bio_vegetacao'];


$conn = new PDO('mysql:host=127.0.0.1:3306;dbname=db_ecossistema', 'root', 'mjsm2004');

try{ 
$stmt = $conn->prepare("INSERT INTO tb_biomas (bio_bioma, bio_clima, bio_vegetacao)
 VALUES ('".$bio_bioma."', '".$bio_clima."', '".$bio_vegetacao."');");
$stmt->execute();
echo "<center><h1> Registro de bioma concluído </h1></center>  <a href='/'><button class='btn btn-info'>Home</button></a>";
} catch(PDOException $e) {
    echo "<br>" . $e->getMessage();
  }
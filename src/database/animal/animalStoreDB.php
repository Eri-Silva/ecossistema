<?php
$ani_animal = $_POST['ani_animal'];
$ani_nomecientifico = $_POST['ani_nomecientifico'];
$ani_expectvida = $_POST['ani_expectvida'];
$ani_alimentacao = $_POST['ani_alimentacao'];
$ani_bio_id = $_POST['ani_bio_id'];


$conn = new PDO('mysql:host=127.0.0.1:3306;dbname=db_ecossistema', 'root', 'mjsm2004');

try{ 
$stmt = $conn->prepare("INSERT INTO tb_animais (ani_animal, ani_nomecientifico, ani_expectvida, ani_alimentacao,ani_bio_id) 
VALUES ('".$ani_animal."', '".$ani_nomecientifico."', '".$ani_expectvida."','".$ani_alimentacao."','".$ani_bio_id."');");
$stmt->execute();
echo "<center><h1>Registro de animal concluído </h1></center>  <a href='/'><button class='btn btn-info'>Home</button></a>";
} catch(PDOException $e) {
    echo  "<br>" . $e->getMessage();
}




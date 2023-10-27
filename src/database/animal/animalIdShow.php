<?php

$id_animal = $_POST['id_animal'];
echo "<table style='border: none; width: 100%; font-size: 130%; '>";
echo "<tr style='background-color: #000080; color: white;'><th >Nome</th><th>Nome cientifico</th><th>Expectativa de vida</th><th>Alimentação</th><th>bioma</th></tr>";

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:150px;border:1px solid black; height: 50px; text-align: center;'>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}

$conn = new PDO('mysql:host=127.0.0.1:3306;dbname=db_ecossistema', 'root', 'mjsm2004');

try {
//   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("call pc_mostrar('".$id_animal."')");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}

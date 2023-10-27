<?php

$id_bioma = $_POST['id_bioma'];
echo "<table style='border: none; width: 100%; font-size: 130%; '>";
echo "<tr style='background-color: #000080; color: white;'><th>Quantidade</th></tr>";

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:300px;border:1px solid black;'>" . parent::current(). "</td>";
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
  $stmt = $conn->prepare("select fn_quant_animal('".$id_bioma."')");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}

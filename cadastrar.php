<?php

require_once"./conexao.php";
if(isset($_POST['cadastrar'])){

  $nomecli = $_POST['nomecadcli'];
  $cpfcli = $_POST['cpfcadcli'];
  $emailcli = $_POST['emailcadcli'];
  $senhacli = $_POST['senhacadcli'];              

  $sql = "INSERT INTO `cliente`(`nomecli`, `cpfcli`, `emailcli`, `senhacli`) VALUES ('$nomecli','$cpfcli','$emailcli','$senhacli')";
 
  $result = $mysqli->query($sql);

  if (!$result or $mysqli->affected_rows != 1 ){
    echo "erro ao cadastrar usuario $nomecli";
  }
  else
    echo "sucesso ao cadastrar $nomecli";
    header('Location:index.php');
}



?>
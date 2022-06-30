<?php
 header("Content-Type: text/html; charset=ISO-8859-1", true);
 include "Conexao.php";
 $ISBN = $_POST['ISBN'];
 if ($ISBN == "")
 {
 echo "<span style='color:red;'>Cadastro cancelado, produto sem código! = </span>";
 echo "<a href=FormularioPrincipal.php><span style='background-color:green; color:white'>OLTAR </a></span>";
 return 0;
 }
 $Titulo = $_POST['Titulo'];
 $Autor = $_POST['Autor'];
 $Num_Edicao = $_POST['Num_Edicao'];
 $Editora = $_POST['Editora'];
 $Local_Pub = $_POST['Local_Pub'];
 $Data_Pub = $_POST['Data_Pub'];
 $Num_Pag = $_POST['Num_Pag'];


 $sql=mysqli_query($conexao, "INSERT INTO cad_produtos(ISBN, Titulo, Autor, Num_Edicao, Editora, Local_Pub, Data_Pub, Num_Pag)
VALUES('$ISBN', '$Titulo', '$Autor', '$Num_Edicao', '$Editora', '$Local_Pub', '$Data_Pub', '$Num_Pag')");

 if ($sql==true)
 {
 echo "<span style='color:green;'>Cadastro efetuado com sucesso!</span>";
 }
 else
 {
 echo "<span style='color:green;'>Error: Cadastro cancelado! = </span>";
 }
 echo "<a href=FormularioPrincipal.php><span style='background-color:green; color:white'>VOLTAR </a></span>";
?>

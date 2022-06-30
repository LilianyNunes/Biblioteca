<?php
header("Content-Type: text/html; charset=ISO-8859-1", true);
?>
<html>
<head>
<title> LISTAGEM </title>
</head>
<body>
 <h1><font color="green">L I S T A G E M D E P R O D U T O S</font></h1>
 <form method="post" action="">
 <select name="opcao">
 <option value="ISBN">ISBN</option>
 <option value="Titulo">Titulo</option>
 <option value="Autor">Autor</option>
 <option value="Num_Edicao">Num_Edicao</option>
 <option value="Editora">Editora</option>
 <option value="Local_Pub">Local_Pub</option>
 <option value="Data_Pub">Data_Pub</option>
 <option value="Num_Pag">Num_Pag</option>
 </select>
<button type="submit" name="Opcao" style="background-color:blue; color: white">Escolha a opção</button> </form>
 </body>
</html>

<?php
 if (isset($_POST['Opcao'])):
 include "Conexao.php";

 $op = $_POST['opcao'];
 $sql=mysqli_query($conexao, "SELECT * FROM cad_produtos ORDER BY $op");

 while ($l=mysqli_fetch_array($sql))
 {
 $ISBN = $l['ISBN'];
 $Titulo = $l['Titulo'];
 $Autor = $l['Autor'];
 $Num_Edicao = $l['Num_Edicao'];
 $Editora = $l['Editora'];
 $Local_Pub = $l['Local_Pub'];
 $Data_Pub = $l['Data_Pub'];
 $Num_Pag = $l['Num_Pag'];
 
 echo "<strong>ISBN:</strong> $ISBN <br />";
 echo "<strong>Titulo:</strong> $Titulo <br />";
 echo "<strong>Autor:</strong> $Autor <br />";
 echo "<strong>Num_Edicao:</strong> $Num_Edicao <br />";
 echo "<strong>Editora:</strong> $Editora <br />";
 echo "<strong>Local_Pub:</strong> $Local_Pub <br />";
 echo "<strong>Data_Pub:</strong> $Data_Pub <br />";
 echo "<strong>Num_Pag:</strong> $Num_Pag <br />";
 echo "<hr></hr>";
 }
 echo "<a href=FormularioPrincipal.php><span style='background-color:green; color:white'> VOLTAR </a></span>";
 endif;
 ?>
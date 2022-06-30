<?php
header("Content-Type: text/html; charset=ISO-8859-1", true);
?>
<html>
<head>
<title> EXCLUIR </title>
</head>
<body>
 <h1><font color="green">E X C L U S Ã O D E P R O D U T O S</font></h1>
 <form method="post" action="">
<label>ISBN:</label>
<input name="ISBN" autocomplete="off">
<button type="submit" name="Excluir" style="background-color:blue; color: white"> Buscar </button>
 </form>
 </body>
</html>

<?php
 if (isset($_POST['Excluir'])):
 include "Conexao.php";

 $ISBN = $_POST['ISBN'];
 
 $sql=mysqli_query($conexao, "SELECT * FROM cad_produtos WHERE ISBN LIKE ".$ISBN);

 $row = mysqli_num_rows($sql);

 if ($row == 0)
 {
 echo "ISBN nao encontrado...";
 }
 else
 {
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
 }
 echo "<a href=Excluir.php?ISBN=$ISBN><span style='background-color:blue; color:white'> CONFIRMAR? </a></span>";
 echo "&emsp;";
 echo "<a href=FormularioPrincipal.php><span style='background-color:green; color:white'> CANCELAR </a></span>";
 endif;
 ?>
 
 <?php
 header("Content-Type: text/html; charset=ISO-8859-1", true);
 include "Conexao.php";
 $ISBN = $_GET['ISBN'];
 
 $sql=mysqli_query($conexao, "DELETE FROM cad_produtos WHERE ISBN='$ISBN'");
 if ($sql==true)
 {
     echo "<span style='color:green;'>Exclusão efetuada com sucesso!</span>";
 }
 else
 {
     echo "<span style='color:green;'>Error: Exclusão cancelada! = </span>";
 }
 echo "<a href=FormularioPrincipal.php><span style='background-color:green; color:white'> VOLTAR </a></span>";
 ?>
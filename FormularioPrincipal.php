<?php
header("Content-Type: text/html; charset=ISO-8859-1",true);
?>
<html>
<head>
<title> BIBLIOTECA </title>
</head>
<body>
<h1><font color="green">BIBLIOTECA</font></h1>
<form method="post" action="">
<table>
 <tr>
<td>ISBN:</td>
<td><input name="ISBN" autocomplete="off"></td>
 </tr>
 <tr>
<td>Título:</td>
<td><input name="Titulo" autocomplete="off"></td>
 </tr>
 <tr>
<td>Autor:</td>
<td><input name="Autor" autocomplete="off"></td>
 </tr>
 <tr>
<td>Número da Edição:</td>
<td><input name="Num_Edicao" autocomplete="off"></td>
 </tr>
 <tr>
<td>Editora:</td>
<td><input name="Editora" autocomplete="off"></td>
 </tr>
 <tr>
<td>Local da Publicação:</td>
<td><input name="Local_Pub" autocomplete="off"></td>
 </tr>
 <tr>
<td>Data da Publicação:</td>
<td><input name="Data_Pub" autocomplete="off"></td>
 </tr>
 <tr>
<td>Número da Página: </td>
<td><input name="Num_Pag" autocomplete="off"></td>
 </tr>
</table>
<button type="submit" name="Inserir" style="background-color:blue; color: white">Cadastrar </button>
<button type="submit" name="Listar" style="background-color:blue; color: white"> Listagem</button>
<button type="submit" name="Pesquisar" style="background-color:blue; color: white">Pesquisar </button>
<button type="submit" name="Editar" style="background-color:blue; color: white"> Editar </button>
<button type="submit" name="Excluir" style="background-color:blue; color: white"> Deletar</button>
<button type="submit" name="Voltar" style="background-color:blue; color: white">Voltar</button>
</form>
</body>
</html>
<?php
if (isset($_POST['Inserir'])):
 include ("Cadastro.php");
endif;
if (isset($_POST['Listar'])):

header("Location:Listar.php");

endif;
if (isset($_POST['Pesquisar'])):
header("Location:Pesquisar.php");
endif;

if (isset($_POST['Editar'])):
header("Location:Editar.php");
endif;

if (isset($_POST['Excluir'])):

header("Location:Excluir.php");

endif;

if (isset($_POST['Voltar'])):
header("Location:biblioteca.php");
endif;
?>
<?php
 header("Content-Type: text/html; charset=ISO-8859-1", true);
?>
<html>
<head>
<title> EDITAR </title>
</head>
<body>
 <h1><font color="green">E D I T A R P R O D U T O S</font></h1>
 <form method="post" action="LocalizarProduto.php">
<label>ISBN:</label>
<input name="Codigo" autocomplete="off">
<button type="submit" name="Pesquisar" style="background-color:blue; color: white"> Pesquisar </button>
 </form>
 </body>
</html>
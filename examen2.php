<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" /> 
<title>Encuesta de Retroalimentacion</title> 
<script src="http://code.jquery.com/jquery-latest.min.js"/>
<script src="js/jquery.validate.js"></script>
</head> 
 
<body> 
	<?php include 'header.php';?>
<h1>Encuesta de Retroalimentacion elderrdz salas</h1>
<form action="ClienteData.php" id="fel" method="POST" onsubmit="" > 
<hr/>  
<p><label for="nombreUsuario" >Nombre:<input type="text" id="nombreUsuario" name="name" minlenght="5" required /> 
	</label></p> 
<p><label for="email" >Correo electronico:
	<input type="text" id="email" name="email" minlenght="5" required /> 
	
</label></p> 
<p><label for="uso">Aspectos que le gustaron:<br/> 
	<select size="3" multiple="multiple" id="use"> 
		<option value="dise�o">Dise�o</option> 
		<option value="Links">Links</option> 
		<option value="Imagenes">Imagenes</option> 
	</select> 
</label></p> 
<p><label for="op">�C�mo lleg� a este sitio?<br/> 
	<input type="radio" id="busqueda" name="op" value="Maquina de busqueda" class="radio"/>Maquina de busqueda
	<input type="radio" id="libro" name="op" value="Referencia de un libro" class="radio"/>Referencia de un libro
	<input type="radio" id="otro" name="op" value="Otro" class="radio"/>Otro
</label></p> 
<p><input type="submit" value="Submit"/>&nbsp;<input type="reset"/></p> 
</form> 
<script type="text/javascript">
$("#fel").validate();
</script>
</body> 
</html> 
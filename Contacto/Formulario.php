<DOCTYPE html> <!--tipo de documento, comentarios -->
<html lang = "es">
	<head>
		<meta charset="UTF-8">
		<meta name ="description" content="Pr&aacute;cticas de la clase de Aplicaciones web">
		<meta name ="keywords" content="programacion, paginas web, cetis58">
		<meta name="author" content="Cervantes Armenta Paola Alicia"/>
		<link rel="icon" href="favicon.ico" type="image/x-ico">
		<link rel="stylesheet" type+"text/css" href="css/Formulario.css">
		<link rel="stylesheet" type="text/css" href="<?=CSS?>php.css"/>
	</head>
<div id="formularioContacto">
		<form name="frmSendEmail" action="Contacto/SendMail.php" method="POST" class="form-consulta">
			<input type="hidden" name="accion" value="sendEmail">
			<h2> Formulario de Contacto</h2>
			
			<label> Nombre y apellido: <span>*</span>
				<input type="text" name="name" placeholder="Nombre y apellido" class="campo-form" required>
			</label>
			
			<label> Email: <span>*</span>
				<input type="email" name="email" placeholder="Email" class="campo-form" required>
			</label>
			
			<label> Consulta: <span>*</span>
				<textarea name="message" class="campo-form"></textarea>
			</label>
			
			<input type="submit" value="Enviar" class="btn-form">
		</form>
</div>
<div style="clear: both;"> &nbsp;</div>
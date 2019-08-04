<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>SpicyX | Home</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="../assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="../assets/css/slick.css">    
    <!-- Date Picker -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-datepicker.css">
	<!-- Sign In -->
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css"> 
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="../assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="../assets/css/theme-color/default-theme.css" rel="stylesheet">   
	 <!-- Formulario contacto -->
	<link rel="stylesheet" type+"text/css" href="../assets/css/Formulario.css">
    <!-- Main style sheet -->
    <link href="../assetscss/style.css" rel="stylesheet">    

   
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>        
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>  
  <!-- Pre Loader -->
  <div id="aa-preloader-area">
    <div class="mu-preloader">
      <img src="../assets/img/preloader.gif" alt=" loader img">
    </div>
  </div>
  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
      <span>Top</span>
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->
  <header id="mu-header">  
    <nav class="navbar navbar-default mu-main-navbar" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->                                                        
          <a class="navbar-brand" href="index.html"><img src="../assets/img/logo.png" alt="Logo img"></a> 
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
            <li><a href="../index.html">HOME</a></li>
          </ul>                            
        </div><!--/.nav-collapse -->       
      </div>          
    </nav> 
  </header>
<?php
	require_once('../configuracion.php');
	$remitente=$_POST['email'];
	$nombre=$_POST['name'];
	$destinatario = MAILFROM;
	$asunto='Consulta desde Contactanos en '.SITENAME;
	$mensaje=$_POST["message"];
	
	$accion=(isset($_POST['accion']))?$_POST['accion']: null;
	$accion=(isset($_GET['accion']))?$_GET['accion']: $accion;
	
	switch($accion){
		case 'sendEmail';
			include '..\Recursos\PHPMailer\Exception.php';
			include '..\Recursos\PHPMailer\PHPMailer.php';
			include '..\Recursos\PHPMailer\SMTP.php';
			
			$mail = new PHPMailer\PHPMailer\PHPMailer(true);
			
			try{
				//Configuracion del servidor
				$mail->Charset="UTF-8";
				$mail->SMTPDebug=0;//para ver errores cambiar a2
				$mail->isSMTP();
				$mail->Host = MAILHOST;
				$mail->SMTPAuth = true;
				$mail->Username = MAILSERVER;
				$mail->Password = MAILPASSWORD;
				$mail->SMTPSecure = MAILSMTPSecure;
				$mail->Port = MAILPORT;
				$mail->setFrom($remitente,$asunto);
				$mail->addAddress($destinatario,SITENAME);
				
				//$mail->addReplyTo('alguienmas@gmail.com','PTI');
				//$mail->addCC('cc@example.com');
				//$mail->addBCC('bcc@example.com');
				
				$cuerpo = "Nombre:".$nombre."<br/>";
				$cuerpo .= "Email:".$remitente."<br/>";
				
				$mail->isHTML(true);
				
				$mail->Subject = $asunto;
				$mail->Body = $cuerpo.'Opiniones: 	 <b>'.$mensaje.'</b>';
				//$mail->AltBody = $cuerpo.'Texto sin HTML'.$mensaje
				$mail->send();
				//var_dump($mail);
				echo '<div class="mensaje">
						<center><strong>
						<h2>~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~</h2>
						<h2>Gracias!</h2>
						Muchas gracias por enviarnos sus comentarios,
						<br/>analizaremos su informacion
						<br/>y le responderemos lo mas pronto posible.
						<br/>
						<a href="../index.html">Ir a Home </a>
						</strong></center>
						</div>';
				
			}
			catch(Exception $e){
				echo '<div class="mensaje">
						<center>
						<h2 class="title">Error al intentar enviar el mensaje</h2>
						<strong>Lo sentimos!</strong></center>
						<center><strong>Su informacion en este momebnto no puede ser enviada, por favor intenta mas tarde.</strong>
						<a href="../index.html">Ir a Home </a>
						</center>
						</div>';
				echo "Error: {$mail -> ErrorInfo}";
			}
			break;
	}
?>
</body>
</html>
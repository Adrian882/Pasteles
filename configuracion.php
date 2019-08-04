<?php
//echo $_SERVER['SERVER_NAME'];
if($_SERVER['SERVER_NAME']=='192.168.2.100' || $_SERVER['SERVER_NAME']=='localhost'){
	
	define('ROOTURL','http://'.$_SERVER['SERVER_NAME'].'/Noxus/');
	define('DOCROOT','C:/wamp64/www/ProyectoLuciano2/');
	define('SITENAME','Luciano');
	define('AUTOR','Luciano');
	
	 define('CSS',ROOTURL.'css/');
	 define('IMAGES',ROOTURL.'imagenes/');
	 
	 define('MAILFROM', 'NoxusContact@gmail.com');
	 define('MAILSERVER','NoxusContact@gmail.com');
	 define('MAILHOST','smtp.gmail.com');
	 define('MAILPASSWORD','Noxus2019');
	 define('MAILSMTPSecure','tls');
	 define('MAILPORT',587);
	 
	 define('DEBUG',true);
	 define('HEADER',DOCROOT.'header.php');
	 define('FOOTER',DOCROOT.'footer.php');
	
	 define('DBHOST','localhost');
     define('DBUSER','root');
     define('DBPASSWD','');
     define('DB','proyecto');
	}
	
	
	
?>
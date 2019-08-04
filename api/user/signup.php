<?php
 
// get database connection
include_once '../config/database.php';
 
// instantiate user object
include_once '../objects/user.php';
 
$database = new Database();
$db = $database->getConnection();
 
$user = new User($db);
 
// set user property values
$user->username = $_POST['username'];
$user->password = base64_encode($_POST['password']);
$user->created = date('Y-m-d H:i:s');
 
// create the user
if($user->signup()){
	include_once 'C/wamp64/www/ProyectoLuciano/SpicyX/index.html';
    $user_arr=array(
        "status" => true,
        "message" => "Se ha registrado correctamente!",
        "id" => $user->id,
        "username" => $user->username
    );
}
else{
    $user_arr=array(
        "status" => false,
        "message" => "El nombre de usuario ya existe!"
    );
}
print_r(json_encode($user_arr));
?>
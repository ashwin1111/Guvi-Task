<?php
if(isset($_POST['submit'])) {
  
  $file = "data.json";
if (!unlink($file))
  {
  //echo ("Error deleting $file");
  }
else
  {
 // echo ("Deleted $file");
  }
	$file = "data.json";
	$json_string = json_encode($_POST, JSON_PRETTY_PRINT);
	file_put_contents($file, $json_string, FILE_APPEND);
$file = "totaldata.json";
  $json_string = json_encode($_POST, JSON_PRETTY_PRINT);
  file_put_contents($file, $json_string, FILE_APPEND);
	//header('Location: save_details.php'); 
}
?>
<?php
  define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'id8517217_biouser');
   define('DB_PASSWORD', 'biopass');
   define('DB_DATABASE', 'database');
  $db = mysqli_connect('localhost','id8517217_biouser',"biopass",'id8517217_bioname');
if(isset($_POST) & !empty($_POST)){
@$name = ($_POST['name']);
@$initial = ($_POST['initial']);
@$phn = ($_POST['phn']);
@$email = ($_POST['email']);
@$address = ($_POST['address']);
@$colg = ($_POST['colg']);
@$deg = ($_POST['deg']);
@$cgpa = ($_POST['cgpa']);
@$achievements = ($_POST['achievements']);
@$aoi = ($_POST['aoi']);

//echo "1";
//echo "$email";
//echo "2";
$email2= $_COOKIE["key"];
//echo "$email2";
if(!is_null($email2) && $email==$email2){
$sql = "INSERT INTO details (name,initial,phn,email,address,colg,deg,cgpa,achievements,aoi) VALUES ('$name','$initial','$phn','$email','$address','$colg','$deg','$cgpa','$achievements','$aoi');";
  $result = mysqli_query($db,$sql);
  //header("location:display_details.php");
  if($result){
    header("location:display_details.html");
  }
  else{
    echo "User Details already exists!";
}
}
else{
  echo "Incorrect email...(registered email and entered email id must be same)";
}
}
?>

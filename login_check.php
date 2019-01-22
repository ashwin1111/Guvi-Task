<?php
  @$email2 = $_POST['email2'];
	//@$email2 = "ewewew";
	//echo $_POST['email2'];
  @$password2 = $_POST['password2'];
   setcookie("key", $email2, time() + (86400 * 30), "/");
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'id8517217_biouser');
   define('DB_PASSWORD', 'biopass');
   define('DB_DATABASE', 'database');
  $db = mysqli_connect('localhost','id8517217_biouser',"biopass",'id8517217_bioname');
?>
<?php
if(isset($_POST['log']))
  {// username and password sent from form 
  		//echo "gl";
      @$email2 = $_POST['email2'];
      @$password2 = $_POST['password2']; 
      //One page 
      //echo $email2;
      //echo $password2;
      $sql = "SELECT * FROM register WHERE email1 = '$email2' and password1 = '$password2'"; 
	  //$sql = "UPDATE login SET = '$ypassword' WHERE email IS '$email12'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      
     // If result matched $email12 and $password2, table row must be 1 row
		//echo $count;
      if($count == 1) {
      //  session_start();
        $_SESSION['login_user'] = $email2;
          header("location:details.html");
      //  echo "jhgjh";
      }
	  else 
	  {
		   header("location:fail.html");
      }
   }
   else{
	   echo "database error";
   }
?>
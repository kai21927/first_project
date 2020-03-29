<html>


<?php
	if($_POST['submit']){
		$error="";
		if(!$_POST['email']){
			$error.="<br>enter your email address";
		}else if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
			$error.="enter valid email address";
		}
		if(!$_POST['password']){
			$error="<br>enter your password";
		}else{
			if(strlen($_POST['password'])<8){$error.="<br>your password at least 8 characters";}
			if(preg_match("`A-Z`",$_POST['password'])){$error.="<br>include a one capital in your password ";}
			
		}
		if($error) echo "there were error(s) in your sign up".$error;
		else{
			$link=mysqli_connect("localhost","root",1234,"class");
			$query="SELECT * FROM students WHERE cEmail='".mysqli_real_escape_string($link,$_POST['email'])."'";
				$result= mysqli_query($link,$query);
				$results=mysqli_num_rows($result);
				if($results) echo "That mail address is already registered";
				else{
					$query="INSERT INTO students(cemail,password) VALUES('".mysqli_real_escape_string($link,$_POST['email'])."','".md5(md5($_POST['email']).$_POST['password'])."')";
					mysqli_query($link,$query);
					
					echo " you've been success";
				}
			
		}
		}
	

?>



<form method="POST">
	<input type="email" name="email" id="email">
	<input type="password" name="password" id="password">
	<input type="submit" name="submit"  value="sign up">



</form>


</html>
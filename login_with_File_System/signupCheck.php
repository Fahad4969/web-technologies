<?php 
	session_start();

	if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];

		if($username != ""){
			if($password != ""){
				if($email != ""){
					
				
					$myfile = fopen('user.txt', 'a');
					$user = $username."|".$password."|".$email;
					fwrite($myfile, $user);
					fclose($myfile);

					header('location: login.html');
				}else{
					echo "invalid ";
				}
			}else{
				echo "invalid password";
			}
		}else{
			echo "invalid user";
		}
	}
?>
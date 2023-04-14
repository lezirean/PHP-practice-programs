<!--
	Author: Borromeo, Leila H.
	BSIT 2-1
	Date: April 21, 2022
-->

<html>
	<body>
		<form action = "" method = "POST">
			
			Enter your username: <input type = "text" value = "" name = "username">
				<br/>

			Enter your password: <input type = "text" value = "" name = "password">
			
				<br/>
				<input type = "submit" value = "Login" name ="login_btn">
		</form>
		
		<?php
		
			if(isset($_POST['login_btn'])) {
				
				$username = $_POST['username'];
				$pw = $_POST['password'];
					
				if($username == "pupt" && $pw == 1234){
					echo "You are logged in.";	
				} else if($username == "" || $pw == ""){
					echo "Please enter username and password.";	
				} else {	
					echo "You entered an incorrect username and password.";	
				}
			};
		
		?>
	</body>
</html>

<!--
	== equality
	=== equality, also considering the data type
-->
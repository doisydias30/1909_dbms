
<?php
	require('includes/config.php');
	
	if(!empty($_POST))
	{
		$msg="";
		
		if($msg!="")
		{
			header("location:register.php?error=".$msg);
		}
		else
		{
			$fname = $_POST['fname'];
			$uname = $_POST['uname'];
			$pswd = $_POST['pswd'];
			$email = $_POST['email'];
			$city = $_POST['city'];
			
			$q = "select * from register where uname= '$uname' && pswd ='$pswd'";

			$result = mysqli_query($conn,$q);

			$num = mysqli_num_rows($result);
			if($num == 1){
				echo "duplicate data";
			}
			else{
				$qy="insert into register(fname,uname,pswd,email,city)
				values('$fname','$uname','$pswd','$email','$city')";
						
						mysqli_query($conn,$qy) or die("Can't Execute Query...");
						header("location:booklist.php?ok=1");
					}
				}
	}
	else
	{
		header("location:index1.php");
	}
?>



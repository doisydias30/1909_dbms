<?php session_start();

require('includes/config.php');
	
	if(!empty($_POST))
	{
		$msg="";
		
		if(empty($_POST['uname']))
		{
			$msg[]="No such User";
		}
		
		if(empty($_POST['pswd']))
		{
			$msg[]="Password Incorrect........";
		}
		
		
		if(!empty($msg))
		{
			echo '<b>Error:-</b><br>';
			
			foreach($msg as $k)
			{
				echo '<li>'.$k;
			}
		}
		else
		{
			
			$unm = $_POST['uname'];
			$pswd = $_POST['pswd'];
			
			$q = "select * from register where uname= '$unm'";
			
			$res=mysqli_query($conn,$q) or die("wrong query");
			
			$row=mysqli_fetch_assoc($res);
			
			if(!empty($row))
			{
				if($_POST['pswd']==$row['pswd'])
				{
					$_SESSION=array();
					$_SESSION['unm']=$row['uname'];
					$_SESSION['uid']=$row['pswd'];
					$_SESSION['status']=true;
					
					if($_SESSION['unm']=="admin")
					{
						header("location:admin/index.php");
					}
					else
					{
						header("location:index2.php");
					}
				}
				
				else
				{
					echo 'Incorrect Password....';
				}
			}
			else
			{
				echo 'Invalid User';
			}
	
	
		}
	}
?>
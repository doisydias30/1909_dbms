<ul>
	<li id="login">
				
						<?php
						require('includes/config.php');
							if(isset($_SESSION['status']))
							{
								echo '<h2>Hello :  '.$_SESSION['unm'].'</h2>';
							}
						?>
			</li>
			<li>
				<h2>Categories</h2>
				<ul>
					<!--
					<li><a href="#">Fiction</a></li>
					<li><a href="#">Romance</a></li>
					<li><a href="#">Education</a></li>
					<li><a href="#">Health</a></li>
					-->
								<?php
										
			
										$query="select * from category ";
			
										$res=mysqli_query($conn,$query);
											
										while($row=mysqli_fetch_assoc($res))
											{
												echo '<li><a href="subcat.php?cat='.$row['cat_id'].'&catnm='.$row["cat_name"].'">'.$row["cat_name"].'</a></li>';
												//pass catid not catnm
											}
			
											mysqli_close($conn);
								?>
				</ul>
			</li>
			
		</ul>
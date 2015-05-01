<!DOCTYPE html>
<?php
	session_start();  
    require "check_logged_in.php"; 
    require "config.php"; 
    
	ini_set('display_errors', 'on');
	
	
	
	function save(){
        	require "config.php"; 
			$time = $_POST['time'];
			$passed = $_POST['passed'];
			$failed = $_POST['failed'];
			$inconclusive = $_POST['inconclusive'];

		/*$saveentry	 = mysqli_query($con,"INSERT INTO ROLE VALUES (null,'$role')");*/
		if($time){
			$message = "Szerepkör sikeresen felvéve!"; 
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		else{
        		echo "Hiba, probald ujra!" . /*mysqli_error($saveentry)*/;
        		echo '<a href="oktatoi.php">'. Vissza . '</a>';
		}
	}
	
    if(isset($_POST['time']) && isset($_POST['passed']) && isset($_POST['failed']) && isset($_POST['inconclusive'])){
    	save();
    }
	
?>
<html>
<head>
	<meta charset="UTF-8">  </meta>
	<title>Profil</title>
	<style media="screen" type="text/css">
	

	
	#profile {
		font-size:120%
	}
	
	div.user_info {
		margin-top : 15px;
	}
	
	textarea {
    		resize: none;
	}
	
	</style>
	
	

<body>
	<h1>Profil</h1>


		<div id="profile">
			<!-- Név --> 
			<table style="width:50%">
				<div class="user_info">
					<tr><td>
						<b>Adatok</b>
					</td></tr>
				</div>
				<div class="user_info">
					<tr><td>
				<tr><td><br><br></td></tr>
				<div class="user_info">
					<tr><td>
						<b>Utolsó futtatás eredményei</b>
					</td></tr>
				</div>
				<div class="user_info">
					<form form id="form" name="form" method="post" action="#">
						<tr><td>
							Futtatás időpontja(YYYY/MM/DD HH:MM): :
						</td><td>
							<input type="text" name="time" class="box" size=30 />
						</td></tr>
						<tr><td>
							Passed:
						</td><td>
							<input type="text" name="passed" class="box" size=30 />
						</td></tr>
						<tr><td>
							Failed:
						</td><td>
							<input type="text" name="failed" class="box" size=30 />
						</td></tr>
						<tr><td>
							Inconclusive:
						</td><td>
							<input type="text" name="inconclusive" class="box" size=30 />
						</td><tr>
						<tr><td/><td>
							<input type="submit" name="Submit" value="Mentés"/>
						</td></tr>
					</form>
				</div>
			</table>
				
		</div>
	</div>
</body>

</html>
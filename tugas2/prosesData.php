<!DOCTYPE html>
<html lang="id" dir="ltr">
	<head>
		<title>Form Register</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="./css.css">
	</head>

	<body> 
		<div class="backgr">
			<?php
				include 'validate.php';
				include 'form.php';
				$errors = array();
				if (isset($_POST['surname']) ||isset($_POST['firstname']) || isset($_POST['email']) || isset($_POST['password']) || isset($_POST['cpassword'])){
					vname($errors, $_POST, 'surname');
					vfname($errors, $_POST, 'firstname');
					vemail($errors, $_POST, 'email');
					vpassword($errors, $_POST, 'password');
					vcpassword($errors, $_POST, 'cpassword');
				 	if ($errors){
						form();
				 	}
				 	else{
				 		echo "<div class=\"latar1\">";
				 		echo "<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Person Detail</h3>";
				 		echo "<h3 style=\"margin:auto;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Form submitted successfully with no errors</h3>";
				 		echo "</div>";
				 	}
				}
				else{
					// tampilkan kembali form
					form();
				}
			?>
		</div>
	</body>
</html>
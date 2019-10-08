<!DOCTYPE html>
<html lang="id" dir="ltr">
	<head>
		<title>kelender 2019</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="./css.css">
	</head>

	<body>
		<?php include "kalender.php";$year=2020;
		?>
		<h1>My Calender <?php echo "$year"; ?> </h1>
		<div class="laykalender">
			<table>
			<tr>
			<?php
				for($i = 1; $i<=12; $i++){
					if(($i)%3 == 0){
						?><td class="kolom" style="text-align:center;"><?php display_month($i,$year);?></td>
						<?php if($i != 12){ ?>
							</tr>
							<tr class="bariskolom">
						<?php }
					}
					else{
						?><td class="kolom" style="text-align:center;"><?php display_month($i,$year);?></td><?php
					}
				}
			?>
			</tr>
			</table>
		</div>
		<br>
		<h3>National Holidays <?php echo "$year";?></h3>
		<table>
			<?php holiday(); ?>
		</table>
	</body>
</html>
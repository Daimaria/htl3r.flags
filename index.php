<!DOCTYPE html>
<html>
	<head lang="de">
		<meta charset="UTF-8">
		<title>Crows nest</title>
		<style>
			button{
				font-size: 1 em;
			}
		</style>
	</head>
	<body>
		<?php
			echo "<p>Crows nest built successfully Mr. Mac Mugmasher!</p>";
		
			require_once "triFlag.php";
			require_once "rectFlag.php";
		
			echo '<p>';
			$flag1 = new rectFlag("England", "rot", 2, 5);
			$flag1->__toString();
			echo ' Größe ',$flag1->size(),' cm²</p><p>';
			$flag2 = new triFlag("Spanien", "gelb", 2, 5);
			$flag2->__toString();
			echo ' Größe ',$flag2->size(),' cm²</p>';
		?>
	</body>
</html>
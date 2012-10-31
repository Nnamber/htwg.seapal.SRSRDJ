<!DOCTYPE html>
<html>
<head>
	<title>SeaPal</title>
	<link rel="stylesheet" type="text/css" href="../css_ori/style.css">
	<link rel="stylesheet" href="../css_ori/5grid/core.css" />
</head>
<body>
<!--------------------------------------------------------- HEADER ------------------------------------------------------------------------>
		<?php include("header.php"); ?>
<!--------------------------------------------------------- BANNER ------------------------------------------------------------------------>
	<div id="banner-wrapper">
		<div class="5grid">
			<div class="12u-first">	
				<div id="banner">
					<h2>Put something cool here!</h2>
					<span>And put something almost as cool here, but a bit longer ...</span>
				</div>
			</div>
		</div>
	</div>
<!--------------------------------------------------------- CONTENT ------------------------------------------------------------------------>
	<div class="5grid">
		<p>HIER KOMMT DIE SEITE HIN!!!</p>
		<div class="hit_counter">
			<p>Aufrufe :
				<?php
				$hit_count = file_get_contents("../Files/hit_counter.txt");
				echo $hit_count;
				$hit_count++;
				file_put_contents("../Files/hit_counter.txt", $hit_count);
				?> 
			</p>
		</div>
		
	</div>
	
<!--------------------------------------------------------- FOOTER ------------------------------------------------------------------------>
	<?php include("footer.php"); ?>
</body>	
</html>
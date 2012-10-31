<!DOCTYPE HTML>
<html>
<head>
	<title>Insert</title>
</head>
<body>
	<?php 
	include("../connection.php");
	$insert = "INSERT INTO boatinformation (Registernr,Bootsname,Segelzeichen,Heimathafen,
				Yachtclub,Eigener,Versicherung,Rufzeichen,Typ,Konstrukteur,Laenge,Breite,
				Tiefgang,Masthoehe,Verdraengung,FligArt,Baujahr,Motor,Tankgroesse,Wassertankgroesse,
				Abwassertankgroesse,Grosssegelgroesse,Genuagroesse,SpiSizeSpiegroesse) VALUES 
				('$_POST[registernr]','$_POST[bootsname]','$_POST[segelzeichen]','$_POST[heimathafen]','$_POST[yachtclub]',
				'$_POST[eigener]','$_POST[versicherung]','$_POST[rufzeichen]','$_POST[typ]','$_POST[konstrukteur]',
				'$_POST[laenge]','$_POST[breite]','$_POST[tiefgang]','$_POST[masthoehe]','$_POST[verdraengung]','$_POST[fligArt]',
				'$_POST[baujahr]','$_POST[motor]','$_POST[tankgroesse]','$_POST[wassertankgroesse]','$_POST[abwassertankgroesse]',
				'$_POST[grosssegelgroesse]','$_POST[genuagroesse]','$_POST[spi]')";
	
	
	if(!mysql_query($insert,$connection)){
		echo "Could not insert: " . mysql_error();
	}
	mysql_close($connection);
	echo "<meta http-equiv='refresh' content='1; URL=boatInformation.php'>";
	?>
</body>
</html>
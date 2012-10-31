<?php
   $result = mysql_query("SELECT bootsname,typ,konstrukteur,laenge,eigener FROM boatinformation");
	echo "	<table border='1' rules='groups' cellspacing='10' cellpadding='10' >
			<thead><tr><th>Ausgewaehlt</th><th>Bootsname</th><th>Typ</th><th>Konstrukteur</th><th>Laenge</th><th>Inhaber</th></tr></thead>
			<tfoot>
			<tr><td><input type='button' onclick='window.location.reload()' value='Aktualisieren'/></td>
				<td><input type='button' onclick='delete.php' value='Loeschen'/></td>
			</tr>
			</tfoot>
			<tbody>		";
	
	while ($row = mysql_fetch_array($result)) {
		echo "<tr>";
		echo "<td><input type='radio' name='boot'/></td>";
		echo "<td>".$row['bootsname']."</td>";
		echo "<td>".$row['typ']."</td>";
		echo "<td>".$row['konstrukteur']."</td>";
		echo "<td>".$row['laenge']."</td>";
		echo "<td>".$row['eigener']."</td>";
		echo "</tr>";
	}
	echo "</tbody></table>"
?>
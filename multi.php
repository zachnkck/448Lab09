<?php
	echo "<table>";
	for($i = 0; $i <= 100; $i++) {
		echo "<tr>";
		echo "<td>" . $i . "</td>";
		for($j = 0; $j < 100; $j++) {
			if($i == 0) {
				echo "<td>" . ($j + 1) . "</td>";
			}
			else {
				echo "<td>" . (($j + 1) * $i) . "</td>";
			}
		}
		echo "</tr>";
	}
	echo "</table>";
?>
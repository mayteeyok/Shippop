<?PHP
	$chr = ["", "O", "OO", "OOO", "OOOO", "OOOOO", "OOOOOO", "OOOOOOO", "OOOOOOOO", "OOOOOOOOO", "OOOOOOOOOO"];
	echo "<div style='font-size: 50px; margin: 0; width: 350px; text-align: center;'>";
	for ($i = 0; $i < 11; $i++) {
		if (($i % 2) != 0) {
			echo $chr[$i] . "<br />";
		}
	}
	echo "</div>";

<?PHP
	// $marks = array(
	// 	"mohammad" => array("physics" => 35, "maths" => 30, "chemistry" => 39), 
	// 	"qadir" => array("physics" => 30, "maths" => 32, "chemistry" => 29), 
	// 	"zara" => array("physics" => 31, "maths" => 22, "chemistry" => 39));

	echo "คำตอบ จะต้องเขียนโค้ดด้วยวิธีนี้<br />";
	echo "<pre><code>";
	echo "<strong>foreach (\$marks as \$key => \$value) {<br />";
	echo "&nbsp;&nbsp;&nbsp;&nbsp;if (is_array(\$value)) {<br />";
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach (\$value as \$subkey => \$subvalue) {<br />";
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo \$subvalue . ' ';<br />";
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />";
	echo "&nbsp;&nbsp;&nbsp;&nbsp;}<br />";
	echo "}</strong><br />";
	echo "</code></pre>";
	echo "ผลลัพธ์ที่ได้คือ <strong>35 30 39 30 32 29 31 22 39</strong>";

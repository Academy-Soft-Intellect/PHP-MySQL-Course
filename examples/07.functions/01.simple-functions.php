<?php


	function printHeader($title) {
		echo "<!DOCTYPE html>" .
			 "<head lang=\"en\">".
			 "<meta charset=\"UTF-8\">".
			 "<title>$title</title>".
			 "<meta charset=\"UTF-8\">".
			 "</head>".
			 "<body><div>:$title</div>";
	}

	function printFooter() {
		echo 'FOOTER</body>'.
			 '</html>';
	}


	printHeader("HEEADER");
	
	echo "Hello Functions!!!";
	
	printFooter();

?>
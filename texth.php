<?php

		
				echo "<table align='center'>";

				echo"<form method = 'post' id='store_manager' action = 'text.php'>";
				echo "<tr><td>Enter the question:</td><td><input type='text' name='question'></tr>";
				echo "<tr><td colspan=2><input type='submit' name = 'que' value='next question'></td></tr>";
				echo "</form>";

				echo "<form method = 'post' id='store_manager' action = 'form_make.php'>";
				echo "<tr><td colspan=2><input type='submit' name = 'type' value='Choose another type:'></td></tr>";
			
				echo "</form>";
				

?>
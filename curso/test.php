<?php
$var_do_usuario = $_GET['numero'];
	if ($var_do_usuario >3) {
		echo "<p>voce digitou um numero maior que 3</p>";
	}
	elseif ($var_do_usuario ==3) {
		echo "<p>voce digitou um numero igual a 3</p>";
	} else {
		echo "<p>voce digitou um numero menor que 3</p>";
	}
	
	
	
?>
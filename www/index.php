
<?php
/**
* @category Index
* @since 27/05/2020
* @author Rafaela Mansini
*/

require_once 'env.php';

// Abrir Home
if (!isset($_GET['page'])) {
	include CONTROLLER . 'home.php';
} else { // Abre outras paginas
	if (file_exists(CONTROLLER . $_GET['page'] . '.php')) {
		include CONTROLLER . $_GET['page'] . '.php';
	} else {
		include CONTROLLER . 'erro.php';
	}
}
?>
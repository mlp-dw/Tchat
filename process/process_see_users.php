<?php

// VOIR LES MEMBRES
$seeUsers = $mysqlConnection->query("SELECT pseudo 
										FROM users
										ORDER BY pseudo ASC");
$users = $seeUsers->fetchAll();

	//echo json_encode($users);

?>

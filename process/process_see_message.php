<?php
// ON CONNECTE A LA BDD
// echo realpath("../utils/connexionBDD.php");
// die;
include "C:\laragon\www\Tchat\utils\connexionBDD.php";
// VOIR LES MESSAGES ENVOYES
$seeMessages = $mysqlConnection->query("SELECT date_time, content, pseudo 
										FROM messages
										JOIN users
											ON messages.user_id=users.id
										ORDER BY date_time ASC
										");
$messages = $seeMessages->fetchAll();
// $date = strtotime($messages["date_time"]);
// $dateFormat = date("d/m/Y à H:i:s", $date);

	echo json_encode($messages);
	
?>

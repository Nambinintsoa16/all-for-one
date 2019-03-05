<?php
include_once("class/main.php");
$main=new main();
session_start();
$dt=new dateTime();
$dth=new dateTime();
$date=$dt->format("Y-m-d");
$heure=$dt->format("h:m:s");
echo $heure."||".$date;
if (isset($_POST['message']) AND isset($_POST['envoy'])) {
	if (!empty($_POST['message']) AND !empty($_POST['envoy'])) {
$sql="INSERT INTO `message`(`id`, `iduserenvoye`, `iduserrecu`, `message`, `date`, `heure`, `vu`, `statut`) VALUES (NULL,'".$_SESSION['login']['matricule']."','".$_POST['envoy']."','".$_POST['message']."','".$date."','".$heure."','off','".$_SESSION['login']['matricule']."')";
		$main->fetch($sql);
	}
}
?>
<?php
$id=$_GET['id'];
require_once "connection.php";
$delete = $connection->prepare('DELETE FROM students WHERE id =?');
$delete->execute([$id]);
header('Location: index.php');
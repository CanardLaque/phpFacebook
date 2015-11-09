<?php
include('config.php');

$username=$_POST['username'];
$email=$_POST['email'];
$comment=$_POST['comment'];

$sql = "INSERT INTO
			timeline
		SET
			username = :username,
			email = :email,
			comment = :comment
		";

$req = $db->prepare($sql);

$req->execute(array(
    ':username'	=>	$username,
    ':email'	=>	$email,
    ':comment'  =>  $comment
));



header('Location: index.php');
?>
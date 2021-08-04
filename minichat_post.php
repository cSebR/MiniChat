<?php 
include('bdd.php');

$req = $bdd->prepare('INSERT INTO chat (pseudo, message) VALUES (?,?)');
$req->execute(array($_POST['pseudo'], $_POST['message']));

// redirection HTTP (entetes HTTP)
header('Location: minichat.php');



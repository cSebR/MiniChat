<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=UTF8','root','');
}
catch(Exception $e)
{
    die('Erreur:'.$e->getMessage());
}
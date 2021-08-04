<?php include('bdd.php');?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Mini-chat</title>
    </head>
    <body>
    
    <form action="minichat_post.php" method="post" style="text-align:center;">
        <p>
        <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" /><br />
        <label for="message">Message</label> :  <input type="text" name="message" id="message" /><br />

        <input type="submit" value="Envoyer" />
	</p>
    </form>

<?php
    $res = $bdd->query('SELECT pseudo, message FROM chat ORDER BY ID DESC LIMIT 0,10');

    while($donnees = $res->fetch())
    {
        echo '<p><strong>'.htmlspecialchars($donnees['pseudo']).'</strong> : '. htmlspecialchars($donnees['message']).'</p>';
    }

    $res->closeCursor();

?>

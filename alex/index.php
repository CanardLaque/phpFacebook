<?php
 include("config.php");
?>
<html>

<head>
<link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
<form action="post.php" method="post">
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="username" />
    </div>
    <div>
        <label for="courriel">Courriel :</label>
        <input type="email" id="courriel" name="email" />
    </div>
    <div>
        <label for="message">Message :</label>
        <textarea id="message" name="comment"></textarea>
    </div>
    <button type="submit">Envoyer sur la timeline</button>
</form>


</html>

<?php



$sql = "SELECT * FROM timeline ORDER BY ID DESC";

$req = $db->prepare($sql);
$req->execute();
$result = $req->fetchAll(PDO::FETCH_ASSOC);

foreach($result as $val){


    $username		= $val['username'];
    $email          = $val['email'];
    $comment		= $val['comment'];

    echo "Nom : ".$username."<br>";
    echo "Email : ".$email."<br>";
    echo "Comment : ".$comment."<br>";
    echo "<div class='addco' onclick='yo()'><p>Ajouter un commentaire</p></div>";

    echo "<form action='post.php' method='post'>"
    echo "<div>";
    echo "    <label for='nom'>Nom :</label>";
        echo "<input type='text' id='nom' name='username' />";
    echo "</div>";
    echo "<div>";
        echo "<label for='courriel'>Courriel :</label>";
        echo "<input type='email' id='courriel' name='email' />";
    echo "</div>";
   echo " <div>";
        echo "<label for='message'>Message :</label>";
       echo " <textarea id='message' name='comment'></textarea>";
    echo "</div>";
    echo "<button type='submit'>Envoyer sur la timeline</button>";
echo "</form>";
}
?>

<script>

</script>
</body>





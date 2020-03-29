<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recup données formulaire</title>
</head>
<body>
    <P>Bonjour <?php echo htmlspecialchars($_POST['prenom']); ?> </P>;
    <?php
        if(isset($_POST['vegetarien']))
        {
            echo '<p>Vous êtes donc végétarien.</p>';
        }
        else
        {
            echo '<p>Vous n\'êtes pas vegetarien, vous mangez de la viande.</p>';
        }
    ?>
</body>
</html>

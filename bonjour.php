<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon super site</title>
</head>
<body>
    <p>

        <?php
        if(isset($_GET['nom']) AND isset($_GET['prenom']) AND isset($_GET['age']) AND isset($_GET['repeter']))
        {
                $nbRepetitions = (int) $_GET['repeter'];
                if ($nbRepetitions < 100)
                {
                    for ($repetition = 0 ; $repetition < $nbRepetitions; $repetition++ )
                    {
                        echo '<p>Bonjour' . $_GET['nom'] . ' ' . $_GET['prenom'] .' ' . $_GET['age'] .'</p>';
                    }
                }

        }
       else
           {
           echo 'Pas de nom ou de prénom défini !';
            }
       ?>
    </p>
</body>
</html>
// Transmettre des données avec une URL
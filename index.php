
<!DOCTYPE html>
<html>
    <head>
        <title>Ceci est une page de test avec des balises PHP</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h2>Page de test</h2>

        <p>
            Cette page contient du code HTML avec des balises PHP.<br />
            <?php echo "Bonjour !" ?>
            Voici quelques petits tests :
        </p>

        <ul>
        <li style="color: blue;">Texte en bleu</li>
        <li style="color: red;">Texte en rouge</li>
        <li style="color: green;">Texte en vert</li>
        </ul>

        <?php
        $ageDuVisiteur = 20;
        //echo "Le visiteur a $ageDuVisiteur ans.";
        echo 'Le visiteur a ' . $ageDuVisiteur . ' ans.';
        echo "<br/>";
        $prix = 2.5;
        $quantite = 10;
        $total = $prix * $quantite;
        echo 'Cela coute '. $total . ' euros.';
        echo "<br/>";
        $age = 14;
        if ($age < 12){
            echo 'Salut gamin !';
        }elseif ($age == 14){
            echo 'Tu as 14 ans';
        }else{
          echo 'Bonjour cher adulte !';
        }
        echo "<br/>";
        $adulte  = true;
        if ($adulte){
            echo 'Tu es adulte';
        }else {
            echo 'Tu es enfant';
        }
        echo "<br/>";
        $age = 18;
        switch ($age){
            case 4;
            echo 'Tu as 4 ans !';
            break;
            case 16;
            echo 'Tu es un peu plus âgé, tu as 16 ans!';
            break;
            case 18;
            echo 'Tu es majeur !';
            break;
        }
        echo "<br/>";
        $repetitions = 0;
        while ($repetitions < 10){
            echo '<p>Je ne dois pas boire d\'alcool. ' . $repetitions . ' fois.</p>';
            $repetitions++;
        }
        ?>
    </body>
</html>
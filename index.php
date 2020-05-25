<?php
$age = 20;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Exercice 1</title>
</head>
<body>
  <?php if ($age >= 18 && $age < 120){ ?>
    <p>Vous êtes majeur. FELICITATIONS ! Vous avez survécu jusque là.</p>
    <?php
    }
    elseif ($age < 18 && $age > 0){
      ?>
      <p>Vous êtes mineur. Allez jouer à Minecraft. Faites gaffe aux Creepers.</p>
      <?php
      }else{ ?>
        <p>Vous êtes une erreur de la nature ou un vieux troll.</p>
        <?php } ?>
      </body>
      </html>

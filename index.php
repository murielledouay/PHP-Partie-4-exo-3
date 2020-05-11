<?php
$number1 = 30;
$number2 = 30;
function comparaison($number1para, $number2para)
{
  if ($number1para < $number2para) {
    $message = 'Le premier nombre est plus petit';
  } elseif ($number1para > $number2para){
    $message = 'Le premier nombre est plus grand';
  } else {
    $message = 'Les deux nombres sont identiques';
  }
  return $message;
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="assets/css/style.css"/>
  <title>Partie 4 exo 3</title>
</head>
<body>
  <?php
// si on affiche le paramètre
// echo de la variable
  $result = comparaison($number1,$number2); ?>
  <p> <?php echo $result;?> </p>
</body>
</html>

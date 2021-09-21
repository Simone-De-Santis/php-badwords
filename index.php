<?php      

$text ="Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia odit omnis quae iusto similique? Eius vitae obcaecati aliquid nemo quam nostrum fugiat mollitia corrupti, iure facilis natus sapiente placeat cupiditate.";
$text_censored=str_replace($_POST["censored"], "(***)", $text);
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <!-- sezione form che tramite il metodo post recupera il valore inserito dall'utente s -->
    <h1> 1° Esercitazione con PHP </h1>
    <form action="index.php" method="post">
  <label for="censored">Word to be censored:</label><br>
  <input type="text" id="censored" name="censored" placeholder="Write here....."><br>
  <input type="submit" value="censored">
</form> 
<!-- stampa la frase originale  -->
    <p> <?php echo $text; ?></p>
    <p> number of characters: <?php echo strlen($text); ?></p>
    <h1>Text Censured:</h1>
<!-- stampa la frase censurata la parola censurata e restituisce il numero di caratteri -->
    <p> <?php echo $text_censored; ?></p>
    <p> number of characters: <?php echo strlen($text_censored); ?></p>
    <hr>
    <h3> Word censored:</h3>
    <?php echo $_POST["censored"]; ?><br>

</body>
</html>
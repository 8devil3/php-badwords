<!DOCTYPE html>
<html lang="it">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP Badwords</title>
</head>
<body>

<?php 
$text = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur animi natus aspernatur eaque quisquam enim modi expedita? Commodi dicta molestiae veniam aperiam, dolore reprehenderit similique nemo laboriosam voluptatibus dolores animi!';

$searchWord = $_GET['word'];
$replace = str_replace($searchWord, '***', $text);

echo '<p>Il testo originale è: ' . '<em>' . $text . '</em><br>Lunghezza del testo: ' . strlen($text) . ' caratteri.</p>';

if ($searchWord == '' || is_null($searchWord)) {
   echo '<p>Inserisci un parametro URL nella forma <strong>?word=<em>parola</em></strong>';
} else {
   echo '<p>Il testo con sostituzioni è: <em>' . $replace . '</em><br>Lunghezza del testo: ' . strlen($replace) . ' caratteri.</p>';
}
?>

</body>
</html>
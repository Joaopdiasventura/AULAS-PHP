<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA 1</title>
</head>
<body>

<?php

?>

<form action="./action.php" method="POST">
    <select>
        <option value="mat">MATHEUS</option>
        <option value="joj">JOÃO</option>
    </select>
    <div>
        <input type="radio" name="chose" id="pedra" value="pedra"> PEDRA
        <input type="radio" name="chose" id="papel" value="papel"> PAPEL 
        <input type="radio" name="chose" id="tesoura" value="tesoura"> TESOURA
    </div>
    <input type="submit" value="ENVIAR">
</form>
    
</body>
</html>
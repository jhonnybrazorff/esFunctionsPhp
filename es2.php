<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    
    <?php
        include 'functions.inc.php';
        $a = 5;
        $b = 10;
        $result = somma($a, $b);
        $sub = sottrazione($a, $b);
        echo "La somma di " . $a . " e " . $b . " è: " . $result . "<br>";
        echo "La sottrazione di " . $a . " e " . $b . " è: " . $sub;
    ?>

</body>
</html>


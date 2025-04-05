<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
    <form action="index.php" method="post">
        <label>Number One:</label><br>
        <input type="number" name="numOne"><br>
        <input type= "text" name="toperator"><br>
        <label>Number Two:</label><br>
        <input type="number" name="numTwo"><br>
        <input type="submit" name="Calculate"><br>
    </form>
    
    </body> 

</html>

<?php
    $numOne = $_POST["numOne"];
    $numTwo = $_POST["numTwo"];
    $toperator = $_POST["toperator"];
    switch ($toperator) {
        case "+":
            $Total = $numOne + $numTwo;
            break;
        case "-":
            $Total = $numOne - $numTwo;
            break;
        case "*":
            $Total = $numOne * $numTwo;
            break;
        case "/":
            $Total = $numOne / $numTwo;
            break;
        default:
            echo"Invalid Operator";
    }
    echo"{$Total}";
?>

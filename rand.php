
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Results</title>
</head>
<body>
    <?php

        if($_SERVER["REQUEST_METHOD"] === "POST"){

            $numDicesRolled = $_POST['num-dices'];
            $diceSides = $_POST['select-dice'];

            $results = array();

            for($i = 0; $i < $numDicesRolled; $i++){
                $rolls = rand(1, $diceSides);
                array_push($results, $rolls);
            }

            echo "<div class='container'> <h1> You rolled: " . implode(",", $results) . " = " . array_sum($results) . "</h1> </div>";
        }
    ?>
</body>
</html>
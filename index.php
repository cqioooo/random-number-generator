<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Random Number Generator</title>
</head>
<body>

    <div class="container">
        <form action="rand.php" method="POST">
            <input name="num-dices" type="number">
                
            <select name="select-dice">
                <option name="d4" value=4>d4</option>
                <option name="d6" value=6>d6</option>
                <option name="d8" value=8>d8</option>
                <option name="d10" value=10>d10</option>
                <option name="d12" value=12>d12</option>
                <option name="d14" value=14>d14</option>
                <option name="d16" value=16>d16</option>
            </select><br>
                
            <button type="submit">Roll!</button>
        </form>
    </div>    
    
</body>
</html>
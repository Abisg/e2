<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project 2</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <header>
        <h1>Introducing...</h1>
        <img src="image/game-title.png">
    </header>

    <main>
        <h2>Instructions</h2>

        <ul>
            <li>It's your chance to guess the correct word</li>
            <li>Click "Guess" to find out if you guessed correctly</li>
        </ul>

        <form method="POST" action="process.php">

            <input type="radio" id="community" name="choice" value="community"><label for="community">Community</label>
            <input type="radio" id="develop" name="choice" value="develop"><label for="develop">Develop</label>
            <input type="radio" id="environment" name="choice" value="environment"><label
                for="environment">Environment</label>
            <input type="radio" id="excellent" name="choice" value="excellent"><label for="excellent">Excellent</label>

            <button type="submit">Guess</button>
        </form>

        <?php if (isset($results)) { ?>
        <h2>Results</h2>

        <?php if ($winner) { ?>
        Congrats! You won! You chose <?php echo $guess ?>!
        <?php } else if (empty($choice)) { ?>
        Please guess a word.
        <?php } else { ?>
        Correct answer was <?php echo $guess; ?>. Please try again.
        <?php } ?>
        <?php } ?>
    </main>
</body>

</html>
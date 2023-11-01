<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project 2</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>Introducing...</h1>
    <details>
        <summary>

            <img src="image/game-title.png">


            <div id="instructions">

                <h2>Instructions</h2>

                <p>Click the title</p>
                <p>Choose a word</p>
                <p>Click "Guess" to find out if you guessed correctly</p>

            </div>

        </summary>

        <form method="POST" action="process.php">

            <div id="buttons">
                <input type="radio" id="community" name="choice" value="community"><label for="community">Community</label>
                <input type="radio" id="develop" name="choice" value="develop"><label for="develop">Develop</label>
                <input type="radio" id="environment" name="choice" value="environment"><label for="environment">Environment</label>
                <input type="radio" id="excellent" name="choice" value="excellent"><label for="excellent">Excellent</label>
            </div>

            <button type="submit">Guess</button>
        </form>
    </details>

    <?php if (isset($results)) { ?>
        <h3>Results</h3>

        <?php if ($winner) { ?>
            <p>🎉Congrats! You won! You chose <?php echo $guess ?>!</p>
        <?php } else if (empty($choice)) { ?>
            <p>Please guess a word.</p>
        <?php } else { ?>
            <p>❌Correct answer was <?php echo $guess; ?>. Please try again.</p>
        <?php } ?>
    <?php } ?>

</body>

</html>
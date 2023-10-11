<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project 1</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <header>
        <h1>Introducing...</h1>
        <img src="image/game-title.png">
    </header>

    <main>
        <h2>Game Mechanics</h2>

        <nav>
            <ul>
                <li>Computer shows a word</li>
                <li>Player A & B have a chance to guess the word</li>
                <li>If they guess the correct word, they win!</li>
                <li>If they guess the wrong word, they lose:(</li>
            </ul>

            <h2>Results</h2>

            <ul>
                <li>Correct answer is: <?php echo $randomWord ?>
                </li>

                <li>Player A chose: <?php echo $randomWordForPlayerA ?>!
                </li>

                <li>Player B chose: <?php echo $randomWordForPlayerB ?>!
                </li>

                <hr />

                <?php if ($correctA) { ?>
                <li>Player A wins!</li>

                <?php    } else { ?>
                <li>Player A loses:(</li>
                <?php } ?>


                <?php if ($correctB) { ?>
                <li>Player B wins!</li>

                <?php } else { ?>
                <li>Player B loses:(</li>
                <?php } ?>


            </ul>
        </nav>
    </main>
</body>

</html>
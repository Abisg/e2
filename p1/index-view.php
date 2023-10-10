<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project 1</title>
</head>

<body>

    <h1>Project 1 - Guess the Word</h1>

    <h2>Game Mechanics</h2>
    <ul>
        <li>Computer shows a scrambled word</li>
        <li>Player A & B have a chance to guess the word</li>
        <li>The first player to guess the correct word wins!</li>
    </ul>

    <h2>Results</h2>
    <ul>
        <li>Correct answer is: <?php echo $randomWord ?>
        </li>
        <li>Player chose: <?php echo $randomWordForPerson ?> !
        </li>
        <?php if ($correct) { ?>
        <li>They win!</li>
        <?php    } else { ?>
        <li>They lose:(</li>
        <?php } ?>
    </ul>

</body>

</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="resource/style.css">
    <title>Game</title>
</head>
<body>
<!-- TODO: add a form for the user to play the game -->

<div class="container">
    <h1>Language quiz</h1>
    <fieldset>
        <form method="POST" action="">
            <div class="player-row">
                <label for="name">Player Name: </label>
                <input type="text" name="name" id="name">
            </div>

            <h2>Game on:</h2>
            <div class="textField">
                <label for="text">Question</label>
                <p><?php echo $game->selectedWord->word ?></p>
                <input id="text" type="text" name="text">
            </div>
            <br>
            <button type="submit" name="submit" value="go">Submit</button>
            <button type="submit" name="startOver" value="startOver">Try Again</button>
        </form>
    </fieldset>
</div>
</body>
</html>
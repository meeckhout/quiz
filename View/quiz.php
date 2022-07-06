<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Resources/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@400;700&display=swap" rel="stylesheet">
    <title>Game</title>
</head>
<body>
    <div class="container">
        <img class="sparkles" src="https://tenor.com/8jO0.gif" alt="tacky sparkles">
        <h1 class="animate__animated animate__backInDown animate__flash ">Language quiz</h1>
        <img class="sparkles" src="" alt="tacky sparkles">

        <img class="unicat" src="https://static.wikia.nocookie.net/e32fb36d-b34b-4e27-aebc-45dcd3f74944/scale-to-width/755" alt="unicorn and fat cat running">
            <form method="POST" action="">

                <div class="player-row">
                    <label for="name">Player Name: </label>
                    <input type="text" name="name" id="name">
                </div>

                <h2 class="animate__animated animate__wobble">Let's play</h2>

                <div class="text-field">
                    <label for="text" class="question">Question </label>
                    <p><?php echo $game->selectedWord->word ?></p>
                    <input id="text" type="text" name="text">
                </div>

                <button type="submit" name="submit" value="go">Submit</button>
                <button type="submit" name="startOver" value="startOver">Try Again</button>
            </form>
    </div>
</body>
</html>
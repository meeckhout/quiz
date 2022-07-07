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

        <img class="welcome" src="https://www.picgifs.com/glitter-gifs/w/welcome/picgifs-welcome-8421147.gif" alt="welcome">

        <div class="title">
            <img class="sparkle" src="https://www.picgifs.com/glitter-gifs/b/bananas/picgifs-bananas-101478.gif" alt="tacky sparkly cat in banana">
            <h1 class="animate__animated animate__backInDown animate__flash ">Language quiz</h1>
            <img class="sparkle alt" src="https://www.picgifs.com/glitter-gifs/b/bananas/picgifs-bananas-101478.gif" alt="tacky sparkly cat in banana">
        </div>

        <img class="unicat" src="https://static.wikia.nocookie.net/e32fb36d-b34b-4e27-aebc-45dcd3f74944/scale-to-width/755" alt="unicorn and fat cat running">

            <form method="POST" action="">

                <div class="player-row">
                    <label for="name">Player Name: </label>
                    <input type="text" name="name" id="name">
                </div>

<!--                <h2 class="animate__animated animate__wobble">Let's play!</h2>-->

                <div class="waviy">
                    <span style="--i:1">L</span>
                    <span style="--i:2">E</span>
                    <span style="--i:3">T</span>
                    <span style="--i:4">'</span>
                    <span style="--i:5">S</span>
                    <span style="--i:6"></span>
                    <span style="--i:7">P</span>
                    <span style="--i:8">L</span>
                    <span style="--i:9">A</span>
                    <span style="--i:10">Y</span>

                </div>

                <div class="flags">
                    <img class="flag french" src="  https://www.picgifs.com/glitter-gifs/f/flags/picgifs-flags-5218022.gif" alt="french flag">
                    <p class="translate">Translate the French word into English!!!</p>
                    <img class="flag british" src="https://www.picgifs.com/glitter-gifs/f/flags/picgifs-flags-7561188.gif" alt="british flag">
                </div>

                <div class="text-field">
                    <label for="text"></label>
                    <p><?php echo $game->selectedWord->word ?></p>
                    <input id="text" type="text" name="text">
                </div>

                <div class="buttons">
                    <button class="button-53" role="button" type="submit" name="submit" value="go">Submit</button>
                    <button class="button-53" role="button" type="submit" name="startOver" value="startOver">Try again</button>
                </div>

            </form>
    </div>
</body>
</html>
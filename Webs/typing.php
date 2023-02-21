<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"
        integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" />
    <link rel="stylesheet" href="./typing/style.css" />
    <title>Speed Typer</title>
</head>

<body>
    <button id="settings-btn" class="settings-btn">
        <i class="fas fa-cog"></i>
    </button>

    <div id="settings" class="settings">
        <form id="settings-form">
            <div>
                <label for="difficulty" class="dif">Level :</label>
                <select id="difficulty">
                    <option value="easy">Very Easy</option>
                    <option value="easy">Easy</option>
                    <option value="medium">Medium</option>
                    <option value="hard">Hard</option>
                    <option value="hard">Most Hard</option>
                </select>
            </div>
        </form>
    </div>

    <div class="container">
        <h2>👩‍💻 <span class="spancol">Speed Typer</span> 👨‍💻</h2>
        <small>Type the following:</small>

        <h1 id="word"></h1>

        <input type="text" id="text" autocomplete="off" placeholder="Type the word here..." autofocus />

        <p class="time-container">Time left: <span id="time" class="spancol">10s</span></p>

        <p class="score-container">Score: <span id="score" class="spancol">0</span></p>

        <div id="end-game-container" class="end-game-container"></div>
    </div>

    <script src="./typing/script.js"></script>
</body>

</html>
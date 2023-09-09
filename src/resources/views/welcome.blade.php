<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puzzle Challenge</title>
    @vite(['resources/css/styles.css', 'resources/js/script.js'])
</head>
<body>
    <header>
        <h1>Welcome to the Puzzle Challenge!</h1>
        <p>Unlock the mysteries by entering the correct code below.</p>
    </header>
    <main>
        <div class="puzzle">
            <label for="code">Enter the code:</label>
            <input type="text" id="code" placeholder="Enter code...">
            <button id="unlockButton">Unlock</button>
            <p id="message"></p>
        </div>
    </main>
    <footer>
        <p>&copy; 2023 Puzzle Challenge</p>
    </footer>
</body>
</html>

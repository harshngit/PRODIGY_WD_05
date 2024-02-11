<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App With JavaScript</title>
    <!-- font  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="heading">
    <h1 style="font-size:5rem;">Weather App <i class="fa-solid fa-sun"></i></h1>
    </div>
<div class="container">
        <h1>Check Weather here!!!</h1>
        <input type="text" id="locationInput" placeholder="Enter a city">
        <button id="searchButton">Search</button>
        <div class="weather-info">
            <h2 id="location"></h2>
            <p id="temperature"></p>
            <p id="description"></p>
        </div>
    </div>
    <footer>
        <h2>Design and Develope by @codewitharsh</h2>
        <img src="img/logoweb.png">
    </footer>

    <script src="script.js"></script>
</body>
</html>
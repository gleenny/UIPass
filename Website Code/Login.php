<?php session_start(); ?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Poppins Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Whisper&display=swap" rel="stylesheet">
    <title>Log In</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="login">
        <div class="logo">
            <img src="logo.png " alt="logo">
        </div>
        <div class="form">
            <h2>USER LOGIN</h2>
            <form action="logincheck.php" method="post"><!-- changes here -->
                <div class="inputUsername">
                    <label for="username"> Username: </label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="inputPassword">
                    <label for="password"> Password: </label>
                    <input type="text" id="password" name="password" required>
                </div>
                <button type="submit" onclick="checkFields()">Login</button><!-- changes here -->
            </form>
            <?php if (isset($_SESSION['message'])) : ?>
                <p id="message" class="message">
                    <?php echo $_SESSION['message'];
                    unset($_SESSION['message']); ?></p>
            <?php else : ?>
                <p id="message" class="message"></p>
            <?php endif; ?><!-- changes here -->
        </div>
    </div>
    <script src="login.js"></script><!-- changes here -->
</body>

</html>
<!-- WAG KALIMUTAN IRENAME TO INDEX.PHP AFTER MATPOS LAHAT -->
<!--PAPASA TAYOOOO-->
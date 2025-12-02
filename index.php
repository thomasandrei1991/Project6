<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="index.css">
        <title>Document</title>
    </head>
    <body>
        <div class="button-container">
            <h2>Login Form</h2>
            <div class="form-container">  
                <form action="index.php" method="post">
                    <label for="username">Username :</label>
                    <input type="text" id="username" name="username">

                    <label for="password">Password :</label>
                    <input type="password" id="password" name="password">

                    <button type="submit" id="login">Login</button>
                    <button type="reset" id="cancel">Cancel</button>
                </form>
            </div>
        </div>  
    </body>
</html>
<?php
    include("main.php");
?>

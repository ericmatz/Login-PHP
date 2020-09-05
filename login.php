<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="styles/header.css"></link>
        <link rel="stylesheet" href="styles/login.css"></link>
        <link rel="stylesheet" href="styles/footer.css"></link>

        <script type="text/javascript" src="scripts/login.js"></script>
    </head>
    <body>
        <?php require 'view_components/header.php'?>
            <form id="formLogin" class="center">
                <div class="form-row">
                    <label for="email">Email:</label>
                    <input type="email" name="email" required>
                </div>
                <div class="form-row">
                    <label for="password">Password:</label>
                    <input type="password" name="password" required>
                </div>
                <br>
                <button type="submit" id="btnSubmit">Submit</button>
            </form>
        <?php require 'view_components/footer.php'?>
    </body>
</html>
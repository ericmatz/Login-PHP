<html>
    <head>
        <title>Account</title>
        <link rel="stylesheet" href="styles/header.css"></link>
        <link rel="stylesheet" href="styles/account.css"></link>
        <link rel="stylesheet" href="styles/footer.css"></link>
        <script type="text/javascript" src="scripts/account.js"></script>
    </head>
    <body>
        <?php require 'view_components/header.php'?>
        <table>
            <caption>Account Details</caption>
            <tr>
                <?php
                    foreach ($_SESSION['user'] as $key=>$value){
                        echo "<td>$key</td>";
                    }
                ?>
            </tr>
            <tr>
                <?php
                    foreach ($_SESSION['user'] as $key=>$value){
                        echo "<td>$value</td>";
                    }
                ?>
            </tr>
        </table>
        <?php require 'view_components/footer.php'?>
    </body>
</html>
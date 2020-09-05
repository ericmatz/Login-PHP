<?php
    $dropdown = "
        <div class='dropdown'>
            <button class='dropbtn'>
                Account
            </button>
            <div class='dropdown-content'>
                <a href='account.php'>View</a>
                <hr>
                <a href='logout.php?redirect=".$_SERVER['REQUEST_URI']."'>Logout</a>
            </div>
        </div>";
?>

<header>
    <nav class="menu">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li id="btnLogin">
                <?php
                $_SESSION['user'] = array('email' => 'ericmatz1@gmail.com','username'=>'ericm');
                if (isset($_SESSION['user'])) {
                    echo $dropdown;
                } else {
                    echo "<a href='login.php'>Login</a>";
                }
                ?>
            </li>
        </ul>
    </nav>
</header>
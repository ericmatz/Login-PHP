<?php
    if(isset($_SESSION['user'])){
        $_SESSION['user'] = null;
    }
    
    header("Location: " . $_GET['redirect']);
?>
<?php
    session_destroy($_SESSION['iduser']);
    header("Location: ../view/index.php");

?>
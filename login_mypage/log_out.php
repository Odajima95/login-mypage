<?php
session_start();
session_destroy(); //全てのセッションを削除=log-out

header("Location:login.php");

?>
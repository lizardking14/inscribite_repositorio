<?php
session_start();
session_unset();
session_destroy();
$_SESSION = array();

header('Location:'.$general_path.'index.php');
<?php

include('core.inc.php');
session_destroy();
ob_end_flush();
header('Location:../in2dex.php');
?>
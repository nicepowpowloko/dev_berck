<?php
session_start();
require './include/functions.php';
require './include/header.php';
logged_only();
?>

<h1>si vous étes ici c'est que vous étes connectés</h1>

<a href="./include/disconnect.php">se déco</a>


<?php

require './include/footer.php';
?>
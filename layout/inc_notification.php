<?php

unset($_SESSION['confirmation']);
$_SESSION['confirmation'] = null;

if (isset($_SESSION['confirmation'])) {
    echo "<div class='alert alert-" . $_SESSION["confirmation"]["type"] . ">". $_SESSION["confirmation"]["message"] . "</div>";

}

?>
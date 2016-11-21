<?php

if (isset($_SESSION['confirmation'])) {

    echo "<div class='alert alert-" . $_SESSION["confirmation"]["type"] . ">". $_SESSION["confirmation"]["message"] . "</div>";

    unset($_SESSION['notification']);
}

?>
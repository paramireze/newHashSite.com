<?php
function isProduction() {
    return $_SESSION['production'];
}

function MyAutoload($className){
    include_once(SITE_ROOT . '/class/class.' . $className . '.php');
}

spl_autoload_register('MyAutoload');

?>
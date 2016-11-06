<?php
if (!isProduction()) {

    echo '<h1>Session</h1>
          <pre>';
    print_r($_SESSION);
    echo '</pre>';
    echo '<h1>Request</h1>
          <pre>';
    print_r($_REQUEST);
    echo '</pre>';

    echo '<h1>Server</h1>
          <pre>';
    print_r($_SERVER);
    echo '</pre>';

}

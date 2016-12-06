<?php

echo "<div class='table-responsive'><table class='table table-condensed table-striped'>
        <tr>
            <th>id</th>
            <th>authority</th>
            <th>created</th>
            <th>enabled</th>
        </tr>
        ";

foreach ($roles as $role) {
    $enabled = isset($role->enabled) && $role->enabled == true ? "true" : "false";
    echo "<tr><td>" . $role->id . "</td>
            <td>" . $role->authority . "</td>
            <td>" . $role->created . "</td>
            <td>" . $enabled  . "</td></tr>";
}
echo "</table></div>";
?>
<?php

echo "<table class='table table-condensed table-striped'>
        <tr>
            <th>id</th>
            <th>created</th>
            <th>createdBy</th>
            <th>note</th>
            <th>url</th>
            <th>sql</th>
            <th>params</th>
            <th>server</th>
            <th>status</th>
            
        </tr>
        ";
foreach ($dbLogs as $log) {
    echo "<tr><td>" . $log->id . "</td>
            <td>" . $log->created . "</td>
            <td>" . $log->createdBy . "</td>
            <td>" . $log->note . "</td>
            <td>" . $log->url . "</td>
            <td>" . $log->sql . "</td>
            <td>" . $log->params . "</td>
            <td>" . $log->server . "</td>
            <td>" . $log->status . "</td></tr>";
}
echo "
    </table>";
?>
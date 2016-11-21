<?php

echo "<div class='table-responsive'><table class='table table-condensed table-striped'>
        <tr>
            <th>id</th>
            <th>first name</th>
            <th>last name</th>
            <th>hash name</th>
            <th>email</th>
            <th>created</th>
            <th>enabled</th>
            <th>password</th>
        </tr>
        ";
foreach ($users as $user) {

  $enabled = isset($user->enabled) && $user->enabled == true ? "true" : "false";
  echo "<tr><td>" . $user->id . "</td>
            <td>" . $user->firstName . "</td>
            <td>" . $user->lastName . "</td>
            <td>" . $user->hashName . "</td>
            <td>" . $user->email . "</td>
            <td>" . $user->created . "</td>
            <td>" . $enabled  . "</td>
            <td>" . $user->password . "</td></tr>";
}
  echo "</table></div>";
?>
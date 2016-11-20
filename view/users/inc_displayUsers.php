<?php

echo "<table class='table'>
        <tr>
            <th>id</th>
            <th>first name</th>
            <th>last name</th>
            <th>hash name</th>
            <th>password</th>
            <th>email</th>
        </tr>
        ";
foreach ($users as $user) {
  echo "<tr><td>" . $user->id . "</td>
            <td>" . $user->firstName . "</td>
            <td>" . $user->lastName . "</td>
            <td>" . $user->hashName . "</td>
            <td>" . $user->password . "</td>
            <td>" . $user->email . "</td></tr>";
}
echo "
    </table>";
?>
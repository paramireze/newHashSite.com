<?php
/*
 *
 */
function is_user_name_match($userName) {
    $databaseConnection = dbConnection();

    $sql['query'] = "SELECT count(*) FROM user where userName = :userName";

    $sql['params'][':hash'] = $userName;
    $result = do_pdo_query($databaseConnection, $sql['query'], $sql['params']);

}

/*
 *
 */
function is_password_and_username_a_match($userName, $password) {
    $databaseConnection = dbConnection();

    $sql['query'] = "SELECT * FROM user where userName = :userName and password = :password";

    $sql['params'][':userName'] = $userName;
    $sql['params'][':password'] = $password;
    return do_pdo_query($databaseConnection, $sql['query'], $sql['params']);
}

?>
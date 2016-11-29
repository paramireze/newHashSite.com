<?php
/*
 *
 */
function is_user_name_match($userName) {
    $databaseConnection = dbConnection();

    $sql['query'] = "SELECT id FROM user where username = :userName";

    $sql['params'][':userName'] = $userName;

    $result = do_pdo_query($databaseConnection, $sql['query'], $sql['params']);
    return $result->fetch()->id;
}

/*
 *
 */
function is_valid_credentials($id, $password) {
    $isValidCredentials = false;
    $databaseConnection = dbConnection();

    $sql['query'] = "SELECT count(*) `count` FROM user where id = :id and password = :password";

    $sql['params'][':id'] = $id;
    $sql['params'][':password'] = $password;
    $result = do_pdo_query($databaseConnection, $sql['query'], $sql['params']);

    if (!empty($result)) {
        $result = $result->fetch()->count;
        $isValidCredentials = $result == 1 ? true : false;
    }

    return $isValidCredentials;
}

?>
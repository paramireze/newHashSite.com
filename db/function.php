<?php

function dbConnection() {
    $hostname = dbHostName;
    $username = dbUserName;
    $password = dbPassword;
    try {
        $dbh = new PDO("mysql:host=$hostname;dbname=test_madisonh3_com",$username,$password);

        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
    }
    catch(PDOException $e)
    {
        $dbh = null;
        echo $e->getMessage();
    }
    return $dbh;

}

if (!function_exists('do_pdo_query')) {
    function do_pdo_query($db, $query, $query_params = NULL) {
        // no query parameters
        if (empty($query_params)) {
            $stmt = $db->query($query); 
            if (!$stmt) {
                $log_msg = 'problem executing query "' . $query . '".';
                die($log_msg);
            }
        }
        // parameterized query
        else {
            try {
                $stmt = $db->prepare($query);
                if ($stmt == NULL) {
                    die( $query);
                }
                foreach ($query_params as $key => $value) {
                    $stmt->bindValue($key, $value);
                }
                $result = $stmt->execute();
            }
            catch (Exception $e) {
                $log_msg = 'problem executing query "' . $query . '": ' . $e->getMessage();
                die( $log_msg);
            }
            if (!$result) {
                $log_msg = 'problem executing query "' . $query . '" with paramater set: ' . print_r($query_params, TRUE);
                die($log_msg);
            }
        }

        $stmt->setFetchMode(PDO::FETCH_OBJ);
        return $stmt;
    }
}

function doesTableExists($table = 'user') {
    $databaseConnection = dbConnection();

    $sql['query'] = "SHOW TABLES LIKE '" . $table . "'";
    $sql['params'] = null;
    $result = do_pdo_query($databaseConnection, $sql['query'], $sql['params']);

    return $result->rowCount() == 1 ? true : false;
}




?>



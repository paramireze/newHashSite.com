<?php

function getUsers() {

    $databaseConnection = dbConnection();

    $sql['query'] = "SELECT * FROM user";

    $sql['params'] = null;
    return do_pdo_query($databaseConnection, $sql['query'], $sql['params']);
}

function addUsers() {
    $databaseConnection = dbConnection();
    $sql = "insert into user values (default, 'first', 'last', 'paramireze@gmail.com', 'nummy')";
    do_pdo_query($databaseConnection, $sql, null);
}

if (!function_exists('do_pdo_query')) {
    function do_pdo_query($db, $query, $query_params = NULL) {
        // no query parameters
        if (empty($query_params)) {
            $stmt = $db->query($query);
            if (!$stmt) {
                $log_msg = 'problem executing query "' . $query . '".';
                r_error($log_msg, 'database error');
            }
        }
        // parameterized query
        else {
            try {
                $stmt = $db->prepare($query);
                if ($stmt == NULL) {
                    r_error('couldn\'t prepare query: ' . $query,'');
                }
                foreach ($query_params as $key => $value) {
                    $stmt->bindValue($key, $value);
                }
                $result = $stmt->execute();
            }
            catch (Exception $e) {
                $log_msg = 'problem executing query "' . $query . '": ' . $e->getMessage();
                r_error($log_msg, 'database error');
            }
            if (!$result) {
                $log_msg = 'problem executing query "' . $query . '" with paramater set: ' . print_r($query_params, TRUE);
                r_error($log_msg, 'database error');
            }
        }

        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt;
    }
}

?>
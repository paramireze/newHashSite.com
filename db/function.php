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
        //echo $e->getMessage();
    }
    return $dbh;

}

if (!function_exists('do_pdo_query')) {
    function do_pdo_query($db, $query, $query_params = NULL) {
        $dbLog = null;

        // ignore select statements and db logs inserts
        if (shouldCreateDBLog($query)) {
            $dbLog = new DatabaseLog("", $query, getParameters($query_params));
            $dbLog = insertDatabaseLog($dbLog);
        }

        if (empty($query_params)) {
            $stmt = $db->query($query); 
            if (!$stmt) {
                $log_msg = 'problem executing query "' . $query . '".';
                die($log_msg);
            }
        } else {
            try {
                $stmt = $db->prepare($query);
                if ($stmt == NULL) {
                    die( $query);
                }
                foreach ($query_params as $key => $value) {
                    $stmt->bindValue($key, $value);
                }
                $result = $stmt->execute();
            } catch (Exception $e) {
                $log_msg = 'problem executing query "' . $query . '": ' . $e->getMessage();
                die( $log_msg);
            }

            if (!$result) {
                $log_msg = 'problem executing query "' . $query . '" with paramater set: ' . print_r($query_params, TRUE);
                die($log_msg);
            }
        }

        // update the db log status to 'success'
        if (shouldCreateDBLog($query) && !empty($dbLog)) {
            updateDatabaseLog($dbLog);
        }

        $stmt->setFetchMode(PDO::FETCH_OBJ);
        return $stmt;
    }
}

function getParameters($params) {

    $isFirst = true;
    $result = null;
    if (!empty($params)) {
        foreach ($params as $key=>$value) {
            $result .= $isFirst ? "$key=>$value" : ",$key=>$value"; // concat the string
            $isFirst = false;
        }
    }

    return $result;
}

function shouldCreateDBLog($query) {
    return !isDatabaseLogQuery($query) && !isSelectStatement($query);
}

function isDatabaseLogQuery($query) {
    return containsWords($query, "database_logs") || containsWords($query, "SHOW TABLES")? true : false;
}

function isSelectStatement($query){
    return strtolower(strtok($query, " ")) == "select"? true : false;
}

function containsWords($str, $word) {
    return !!preg_match('#\b' . preg_quote(strtolower($word), '#') . '\b#i', $str);
}

?>


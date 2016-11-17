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

        $dbLog = startLog($query, $query_params);
        if (!empty($dbLog)) {
            dumpData($dbLog);
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
                //$dbLog->rowsAffected = !empty($dbLog) ? $stmt->rowCount() : null;
            } catch (Exception $e) {
                $log_msg = 'problem executing query "' . $query . '": ' . $e->getMessage();
                die( $log_msg);
            }

            if (!$result) {
                $log_msg = 'problem executing query "' . $query . '" with paramater set: ' . print_r($query_params, TRUE);
                die($log_msg);
            }
        }

        !empty($dbLog) ? insertDatabaseLog($dbLog) : null ;
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        return $stmt;
    }
}

if (!function_exists('startLog')) {
    function startLog($query, $params) {
        $dbLog = null;
        if (shouldCreateDBLog($query)) {
            $dbLog = new DatabaseLog("No Note", $query, getParameters($params));
        }
        return $dbLog;
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
    return containsWords($query, "database_logs")? true : false;
}

function isSelectStatement($query){
    return strtolower(strtok($query, " ")) == "select"? true : false;
}

function containsWords($str, $word) {
    return !!preg_match('#\b' . preg_quote(strtolower($word), '#') . '\b#i', $str);
}

?>



<?php
/*
 CREATE TABLE `test_madisonh3_com`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `first` VARCHAR(45) NULL,
  `last` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `hashName` VARCHAR(45) NULL
  PRIMARY KEY (`id`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC));

 */


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



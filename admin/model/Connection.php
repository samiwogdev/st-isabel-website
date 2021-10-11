<?php

/**
 * Description of Connection
 *
 * @author samiwog
 */
class Connection {

    public $conn;

    // get the database connection
    public function getDbConnection() {
        global $CONNECTION_STRING, $USERNAME, $PASSWORD;
        if (!isset($this->conn) || is_null($this->conn)) {
            try {
                $this->conn = new PDO($CONNECTION_STRING, $USERNAME, $PASSWORD);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $exception) {
                echo "Connection error: " . $exception->getMessage();
            }
        }
        return $this->conn;
    }

}

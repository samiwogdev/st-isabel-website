<?php
/**
 * library_feature
 *
 * @author samiwog
 */

class Library_feature extends Connection {
    private $id;
    private $title;
    private $feature;
    private $table_name ="library_feature";
    private static $instance;

    public static function getInstance() {
        if (!isset(self::$instance) || is_null(self::$instance)) {
            try {
                self::$instance = new Library_feature();
            } catch (Exception $ex) {
                return $error . ": " . $ex->getMessage();
            }
            return self::$instance;
        }
    }

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getFeature() {
        return $this->feature;
    }

    

    public function setId($id): void {
        $this->id = $id;
    }
    public function setTitle($title): void {
        $this->title = $title;
    }
    public function setFeature($feature): void {
        $this->feature = $feature;
    }
    

    public static function sanitize_input($data) {
        $data = stripslashes($data); //Returns a string with backslashes stripped off
        $data = strip_tags($data); //Strip HTML and PHP tags from a string
        $data = htmlspecialchars($data); //turn html tags to text
        $data = trim($data); //Strip whitespace (or other characters) from the beginning and end of a string
        return $data;
    }

    public function add() {
        $sql = "INSERT INTO " . $this->table_name . " (title, feature) VALUES(:title, :feature)";
        $statement = $this->getDbConnection()->prepare($sql);
        $statement->bindParam(":title", $this->title);
        $statement->bindParam(":feature", $this->feature);
        return $statement->execute();
    }

    public function update() {
        $sql = "UPDATE " . $this->table_name . " SET title = :title, feature = :feature  WHERE id = :id";
        $statement = $this->getDbConnection()->prepare($sql);
        $statement->bindParam(":id", $this->id);
        $statement->bindParam(":title", $this->title);
        $statement->bindParam(":feature", $this->feature);
        $statement->execute();
        return TRUE;
    }

    public function delete(){
        $sql = "DELETE FROM " . $this->table_name . " WHERE id = :id ";
        $statement = $this -> getDbConnection()->prepare($sql);
        $statement->bindParam(":id", $this->id);
        return $statement->execute();
    }

    public function getAll() {
        $sql = "SELECT * FROM " . $this->table_name;
        $statement = $this->getDbConnection()->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }

    public function getById() {
        $sql = "SELECT * FROM " . $this->table_name . " WHERE id = :id";
        $statement = $this->getDbConnection()->prepare($sql);
        $statement->bindParam(":id", $this->id);
        $result = $statement->execute();
        $count = $statement->rowCount();
        if ($count > 0) {
            $result = $statement->fetch(PDO::FETCH_ASSOC);
            return $result;
        } else {
            return FALSE;
        }
    }
}
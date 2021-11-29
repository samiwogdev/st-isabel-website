<?php
/**
 * Description of Banner
 *
 * @author samiwog
 */

class College_banner extends Connection {
    private $id;
    private $title;
    private $college_image;
    private $table_name ="college_banner";
    private static $instance;

    public static function getInstance() {
        if (!isset(self::$instance) || is_null(self::$instance)) {
            try {
                self::$instance = new College_banner();
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

    public function getCollege_image() {
        return $this->college_image;
    }

    public function setId($id): void {
        $this->id = $id;
    }
    public function setTitle($title): void {
        $this->title = $title;
    }
    public function setCollege_image($college_image): void {
        $this->college_image = $college_image;
    }
    

    public static function sanitize_input($data) {
        $data = stripslashes($data); //Returns a string with backslashes stripped off
        $data = strip_tags($data); //Strip HTML and PHP tags from a string
        $data = htmlspecialchars($data); //turn html tags to text
        $data = trim($data); //Strip whitespace (or other characters) from the beginning and end of a string
        return $data;
    }

    public function add() {
        $sql = "INSERT INTO " . $this->table_name . " (title, college_image) VALUES(:title, :college_image)";
        $statement = $this->getDbConnection()->prepare($sql);
        $statement->bindParam(":title", $this->title);
        $statement->bindParam(":college_image", $this->college_image);
        return $statement->execute();
    }

    public function update() {
        $sql = "UPDATE " . $this->table_name . " SET title = :title, college_image = :college_image  WHERE id = :id";
        $statement = $this->getDbConnection()->prepare($sql);
        $statement->bindParam(":id", $this->id);
        $statement->bindParam(":title", $this->title);
        $statement->bindParam(":college_image", $this->college_image);
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
        $result = $statement->fetch(PDO::FETCH_ASSOC);
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
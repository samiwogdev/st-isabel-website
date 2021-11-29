<?php
/**
 * Description of Banner
 *
 * @author samiwog
 */

class Admission_enrolment extends Connection {
    private $id;
    private $title;
    private $description;
    private $enrolment;
    private $enrolment_image;
    private $table_name ="admission_enrolment";
    private static $instance;

    public static function getInstance() {
        if (!isset(self::$instance) || is_null(self::$instance)) {
            try {
                self::$instance = new Admission_enrolment();
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

    public function getDescription() {
        return $this->description;
    }
    public function getEnrolment() {
        return $this->enrolment;
    }
    public function getEnrolment_image() {
        return $this->enrolment_image;
    }

    
    public function setId($id): void {
        $this->id = $id;
    }
    public function setTitle($title): void {
        $this->title = $title;
    }
    public function setDescription($description): void {
        $this->description = $description;
    }
    public function setEnrolment($enrolment): void {
        $this->enrolment = $enrolment;
    }
    public function setEnrolment_image($enrolment_image): void {
        $this->enrolment_image = $enrolment_image;
    }
    

    public static function sanitize_input($data) {
        $data = stripslashes($data); //Returns a string with backslashes stripped off
        $data = strip_tags($data); //Strip HTML and PHP tags from a string
        $data = htmlspecialchars($data); //turn html tags to text
        $data = trim($data); //Strip whitespace (or other characters) from the beginning and end of a string
        return $data;
    }

    public function add() {
        $sql = "INSERT INTO " . $this->table_name . " (title, description, enrolment, enrolment_image) VALUES(:title, :description, :enrolment, :enrolment_image)";
        $statement = $this->getDbConnection()->prepare($sql);
        $statement->bindParam(":title", $this->title);
        $statement->bindParam(":description", $this->description);
        $statement->bindParam(":enrolment", $this->enrolment);
        $statement->bindParam(":enrolment_image", $this->enrolment_image);
        return $statement->execute();
    }

    public function update() {
        $sql = "UPDATE " . $this->table_name . " SET title = :title, description = :description, enrolment = :enrolment, enrolment_image = :enrolment_image  WHERE id = :id";
        $statement = $this->getDbConnection()->prepare($sql);
        $statement->bindParam(":id", $this->id);
        $statement->bindParam(":title", $this->title);
        $statement->bindParam(":description", $this->description);
        $statement->bindParam(":enrolment", $this->enrolment);
        $statement->bindParam(":enrolment_image", $this->enrolment_image);
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
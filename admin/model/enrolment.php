<?php

/**
 * Description of Enrolment
 *
 * @author samiwog
 */
class Enrolment extends Connection {

    private $id;
    private $bg_image;
    private $title;
    private $description;
    private $enrol_title;
    private $enrol_desc;
    private $table_name = "enrolment";
    private static $instance;

    public static function getInstance() {
        if (!isset(self::$instance) || is_null(self::$instance)) {
            try {
                self::$instance = new Enrolment();
            } catch (Exception $ex) {
                return $error . ": " . $ex->getMessage();
            }
            return self::$instance;
        }
    }

    public function getId() {
        return $this->id;
    }

    public function getBg_image() {
        return $this->$bg_image;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getEnrol_title() {
        return $this->enrol_title;
    }
    public function getEnrol_desc() {
        return $this->enrol_desc;
    }

    public function setId($id): void {
        $this->id = $id;
    }
    public function setBg_image($bg_image): void {
        $this->bg_image = $bg_image;
    }

    public function setTitle($title): void {
        $this->title = $title;
    }

    public function setDescription($description): void {
        $this->description = $description;
    }
    public function setEnrol_title($enrol_title): void {
        $this->enrol_title = $enrol_title;
    }
    public function setEnrol_desc($enrol_desc): void {
        $this->enrol_desc = $enrol_desc;
    }

    

    public static function sanitize_input($data) {
        $data = stripslashes($data); //Returns a string with backslashes stripped off
        $data = strip_tags($data); //Strip HTML and PHP tags from a string
        $data = htmlspecialchars($data); //turn html tags to text
        $data = trim($data); //Strip whitespace (or other characters) from the beginning and end of a string
        return $data;
    }

    public function add() {
        $sql = "INSERT INTO " . $this->table_name . " (bg_image, title, description, enrol_title, enrol_desc) VALUES(:bg_image, :title, :description, :enrol_title, :enrol_desc)";
        $statement = $this->getDbConnection()->prepare($sql);
        $statement->bindParam(":bg_image", $this->bg_image);
        $statement->bindParam(":title", $this->title);
        $statement->bindParam(":description", $this->description);
        $statement->bindParam(":enrol_title", $this->enrol_title);
        $statement->bindParam(":enrol_desc", $this->enrol_desc);
        return $statement->execute();
    }

    public function update() {
        $sql = "UPDATE " . $this->table_name . " SET bg_image = :bg_image, title = :title, description = :description, enrol_title = :enrol_title, enrol_desc = :enrol_desc WHERE id = :id";
        $statement = $this->getDbConnection()->prepare($sql);
        $statement->bindParam(":id", $this->id);
        $statement->bindParam(":bg_image", $this->bg_image);
        $statement->bindParam(":title", $this->title);
        $statement->bindParam(":description", $this->description);
        $statement->bindParam(":enrol_title", $this->enrol_title);
        $statement->bindParam(":desc", $this->desc);
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

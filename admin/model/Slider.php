<?php

/**
 * Description of Slider
 *
 * @author samiwog
 */
class Slider extends Connection {

    private $id;
    private $title;
    private $description;
    private $slider_image;
    private $table_name = "slider";
    private static $instance;

    public static function getInstance() {
        if (!isset(self::$instance) || is_null(self::$instance)) {
            try {
                self::$instance = new Slider();
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

    public function getSlider_image() {
        return $this->slider_image;
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

    public function setSlider_image($slider_image): void {
        $this->slider_image = $slider_image;
    }

    public static function sanitize_input($data) {
        $data = stripslashes($data); //Returns a string with backslashes stripped off
        $data = strip_tags($data); //Strip HTML and PHP tags from a string
        $data = htmlspecialchars($data); //turn html tags to text
        $data = trim($data); //Strip whitespace (or other characters) from the beginning and end of a string
        return $data;
    }

    public function add() {
        $sql = "INSERT INTO " . $this->table_name . " (title, description, slider_image) VALUES(:title, :description, :slider_image)";
        $statement = $this->getConnection()->prepare($sql);
        $statement->bindParam(":title", $this->title);
        $statement->bindParam(":description", $this->description);
        $statement->bindParam(":slider_image", $this->slider_image);
        return $statement->execute();
    }

    public function update() {
        $sql = "UPDATE " . $this->table_name . " SET title = :title, description = :description, slider_image = :slider_image  WHERE id = :id";
        $statement = $this->getConnection()->prepare($sql);
        $statement->bindParam(":id", $this->id);
        $statement->bindParam(":title", $this->title);
        $statement->bindParam(":description", $this->description);
        $statement->bindParam(":slider_image", $this->slider_image);
        return $statement->execute();
    }

    public function delete() {
        $sql = "DELETE FROM " . $this->table_name . " WHERE id = :id ";
        $statement = $this->getConnection()->prepare($sql);
        $statement->bindParam(":id", $this->id);
        return $statement->execute();
    }

    public function getAll() {
        $sql = "SELECT * FROM " . $this->table_name;
        $statement = $this->getConnection()->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }

}

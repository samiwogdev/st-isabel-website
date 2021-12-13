<?php

/**
 * Description of gallery_data
 *
 * @author samiwog
 */
class GalleryData extends Connection {

    private $id;
    private $gallery_image;
    private $description;
    private $table_name = "gallery_data";
    private static $instance;

    public static function getInstance() {
        if (!isset(self::$instance) || is_null(self::$instance)) {
            try {
                self::$instance = new GalleryData();
            } catch (Exception $ex) {
                return $error . ": " . $ex->getMessage();
            }
            return self::$instance;
        }
    }

    public function getId() {
        return $this->id;
    }

    public function getGallery_image() {
        return $this->gallery_image;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getTable_name() {
        return $this->table_name;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setGallery_image($gallery_image): void {
        $this->gallery_image = $gallery_image;
    }

    public function setDescription($description): void {
        $this->description = $description;
    }

    public function setTable_name($table_name): void {
        $this->table_name = $table_name;
    }

    public static function sanitize_input($data) {
        $data = stripslashes($data); //Returns a string with backslashes stripped off
        $data = strip_tags($data); //Strip HTML and PHP tags from a string
        $data = htmlspecialchars($data); //turn html tags to text
        $data = trim($data); //Strip whitespace (or other characters) from the beginning and end of a string
        return $data;
    }

    public function add() {
        $sql = "INSERT INTO " . $this->table_name . " ( gallery_image, description) VALUES(:gallery_image, :description)";
        $statement = $this->getDbConnection()->prepare($sql);
        $statement->bindParam(":gallery_image", $this->gallery_image);
        $statement->bindParam(":description", $this->description);
        return $statement->execute();
    }

    public function update() {
        $sql = "UPDATE " . $this->table_name . " SET  gallery_image = :gallery_image, description = :description  WHERE id = :id";
        $statement = $this->getDbConnection()->prepare($sql);
        $statement->bindParam(":id", $this->id);
        $statement->bindParam(":gallery_image", $this->gallery_image);
        $statement->bindParam(":description", $this->description);
        return $statement->execute();
    }

    public function delete() {
        $sql = "DELETE FROM " . $this->table_name . " WHERE id = :id ";
        $statement = $this->getDbConnection()->prepare($sql);
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

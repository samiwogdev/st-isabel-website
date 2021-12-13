<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GalleryPicture
 *
 * @author samiwog
 */
class GalleryPicture extends Connection {

    private $id;
    private $gallery_def_id;
    private $gallery_picture;
    private $table_name = "gallery_picture";
    private static $instance;

    public static function getInstance() {
        if (!isset(self::$instance) || is_null(self::$instance)) {
            try {
                self::$instance = new GalleryPicture();
            } catch (Exception $ex) {
                return $error . ": " . $ex->getMessage();
            }
            return self::$instance;
        }
    }


    public function getId() {
        return $this->id;
    }

    public function getGallery_def_id() {
        return $this->gallery_def_id;
    }

    public function getGallery_picture() {
        return $this->gallery_picture;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setGallery_def_id($gallery_def_id): void {
        $this->gallery_def_id = $gallery_def_id;
    }

    public function setGallery_picture($gallery_picture): void {
        $this->gallery_picture = $gallery_picture;
    }

    
        
    public static function sanitize_input($data) {
        $data = stripslashes($data); //Returns a string with backslashes stripped off
        $data = strip_tags($data); //Strip HTML and PHP tags from a string
        $data = htmlspecialchars($data); //turn html tags to text
        $data = trim($data); //Strip whitespace (or other characters) from the beginning and end of a string
        return $data;
    }

    public function add() {
        $sql = "INSERT INTO " . $this->table_name . " ( gallery_def_id, gallery_picture) VALUES(:gallery_def_id, :gallery_picture)";
        $statement = $this->getDbConnection()->prepare($sql);
        $statement->bindParam(":gallery_def_id", $this->gallery_def_id);
        $statement->bindParam(":gallery_picture", $this->gallery_picture);
        return $statement->execute();
    }

    public function update() {
        $sql = "UPDATE " . $this->table_name . " SET title = :title, banner_image = :banner_image WHERE id = :id";
        $statement = $this->getDbConnection()->prepare($sql);
        $statement->bindParam(":id", $this->id);
        $statement->bindParam(":title", $this->title);
        $statement->bindParam(":banner_image", $this->banner_image);
        $statement->execute();
        return TRUE;
    }

    public function delete() {
        $sql = "DELETE FROM " . $this->table_name . " WHERE id = :id ";
        $statement = $this->getDbConnection()->prepare($sql);
        $statement->bindParam(":id", $this->id);
        return $statement->execute();
    }

    public function getAll() {
        $sql = "SELECT * FROM " . $this->table_name. " WHERE gallery_def_id =:gallery_def_id";
        $statement = $this->getDbConnection()->prepare($sql);
        $statement->bindParam(":gallery_def_id", $this->gallery_def_id);
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

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FacilityPicture
 *
 * @author samiwog
 */
class FacilityPicture extends Connection {

    private $id;
    private $facility_def_id;
    private $facility_picture;
    private $table_name = "facility_picture";
    private static $instance;

    public static function getInstance() {
        if (!isset(self::$instance) || is_null(self::$instance)) {
            try {
                self::$instance = new FacilityPicture();
            } catch (Exception $ex) {
                return $error . ": " . $ex->getMessage();
            }
            return self::$instance;
        }
    }


    public function getId() {
        return $this->id;
    }

    public function getFacility_def_id() {
        return $this->facility_def_id;
    }

    public function getFacility_picture() {
        return $this->facility_picture;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setFacility_def_id($facility_def_id): void {
        $this->facility_def_id = $facility_def_id;
    }

    public function setFacility_picture($facility_picture): void {
        $this->facility_picture = $facility_picture;
    }

        
    public static function sanitize_input($data) {
        $data = stripslashes($data); //Returns a string with backslashes stripped off
        $data = strip_tags($data); //Strip HTML and PHP tags from a string
        $data = htmlspecialchars($data); //turn html tags to text
        $data = trim($data); //Strip whitespace (or other characters) from the beginning and end of a string
        return $data;
    }

    public function add() {
        $sql = "INSERT INTO " . $this->table_name . " ( facility_def_id, facility_picture) VALUES(:facility_def_id, :facility_picture)";
        $statement = $this->getDbConnection()->prepare($sql);
        $statement->bindParam(":facility_def_id", $this->facility_def_id);
        $statement->bindParam(":facility_picture", $this->facility_picture);
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
        $sql = "SELECT * FROM " . $this->table_name. " WHERE facility_def_id =:facility_def_id";
        $statement = $this->getDbConnection()->prepare($sql);
        $statement->bindParam(":facility_def_id", $this->facility_def_id);
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

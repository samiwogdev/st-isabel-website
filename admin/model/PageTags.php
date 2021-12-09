<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PageDefinition
 *
 * @author samiwog
 */
class PageDefinition extends Connection {

    private $id;
    private $definition_id;
    private $title;
    private $table_name = "page_definition";
    private static $instance;

    public function getId() {
        return $this->id;
    }

    public function getDefinition_id() {
        return $this->definition_id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setDefinition_id($definition_id): void {
        $this->definition_id = $definition_id;
    }

    public function setTitle($title): void {
        $this->title = $title;
    }

    
    public static function getInstance() {
        if (!isset(self::$instance) || is_null(self::$instance)) {
            try {
                self::$instance = new PageDefinition();
            } catch (Exception $ex) {
                return $error . ": " . $ex->getMessage();
            }
            return self::$instance;
        }
    }

    public static function sanitize_input($data) {
        $data = stripslashes($data); //Returns a string with backslashes stripped off
        $data = strip_tags($data); //Strip HTML and PHP tags from a string
        $data = htmlspecialchars($data); //turn html tags to text
        $data = trim($data); //Strip whitespace (or other characters) from the beginning and end of a string
        return $data;
    }

    public function add() {
        $sql = "INSERT INTO " . $this->table_name . " (definition_id, title) VALUES(:title, :definition_id)";
        $statement = $this->getDbConnection()->prepare($sql);
        $statement->bindParam(":title", $this->title);
        $statement->bindParam(":definition_id", $this->definition_id);
        return $statement->execute();
    }

    public function update() {
        $sql = "UPDATE " . $this->table_name . " SET title = :title  WHERE id = :id";
        $statement = $this->getDbConnection()->prepare($sql);
        $statement->bindParam(":id", $this->id);
        $statement->bindParam(":title", $this->title);
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

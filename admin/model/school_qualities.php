<?php
/** 
 * Description of Qualities
 * 
 * @author samiwog
*/

class School_qualities extends Connection{
    private $id;
    private $qualities;
    private $table_name = "school_qualities";
    private static $instance;

    public static function getInstance() {
        if (!isset(self::$instance) || is_null(self::$instance)) {
            try {
                self::$instance = new School_qualities();
        } catch(Exception $ex){
            return $error . ": " . $ex->getMessage();
        }
        return self::$instance;
    }
}

public function getId(){
    return $this->id;
}

public function getQualities(){
    return $this->qualities;
}

public function setId($id): void{
    $this->id = $id;
}

public function setQualities($qualities): void{
    $this -> qualities = $qualities;
}

public static function sanitize_input($data){
    $data = stripslashes($data); 
    $data = strip_tags($data);
    $data = htmlspecialchars($data);
    $data = trim($data);
    return $data;
}

public function add() {
    $sql = "INSERT INTO " . $this->table_name . " (qualities) VALUES(:qualities)";
    $statement = $this->getDbConnection()->prepare($sql);
    $statement -> bindParam(":qualities", $this->qualities);
    return $statement->execute();
}
public function update() {
    $sql = "UPDATE " . $this->table_name . " SET qualities = :qualities WHERE id = :id"; 
    $statement = $this->getDbConnection()->prepare($sql);
    $statement->bindParam(":id", $this->id);
    $statement -> bindParam(":qualities", $this->qualities);
    $statement->execute();
    return TRUE;
}

public function delete(){
    $sql = "DELETE FROM " . $this->table_name . " WHERE id = :id";
    $statement = $this -> getDbConnection()->prepare($sql);
    $statement->bindParam(":id", $this->id);
    return $statement->execute();
}

public function getAll(){
    $sql = "SELECT * FROM " . $this->table_name;
    $statement = $this->getDbConnection()->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll();
    return $result;
}

public function getById(){
    $sql = "SELECT * FROM " . $this->table_name . " WHERE id = :id";
    $statement = $this->getDbConnection()->prepare($sql);
    $statement -> bindParam(":id", $this->id);
    $result = $statement->execute();
    $count = $statement->rowCount();
    if ($count > 0){
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    } else {
        return FALSE;
    }
}

}

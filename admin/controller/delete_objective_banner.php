<?php

include_once '../configuration.php';
$id = Objective_banner::sanitize_input($_GET['auth']);
$objective_banner = Objective_banner::getInstance();
$objective_banner->setId($id);
if ($objective_banner->delete()) {
    header("location: ../school_page/objective_banner?info=del");
} else {
    header("location: ../school_page/objective_banner?info=failed");
}

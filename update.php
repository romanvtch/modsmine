<?php
require_once 'db_connect.php';
require_once 'functions.php';

$result = $conn->query("SELECT * FROM post");
while(($info = $result->fetch_assoc())) {
    print_r($info);
    $conn->query("UPDATE post SET link = '".translit_url($info["title"])."' WHERE id = ".$info["id"]);
}

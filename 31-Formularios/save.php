<?php

$title = $_POST['title'];
$description = $_POST['description'];

if(isset($title) && isset($description)) {
  echo "<h1>$title</h1>";
  echo "<h2>$description</h2>";
}


?>
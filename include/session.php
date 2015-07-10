<?php
   session_start();
   // store session data
   $_SESSION['name'] = $_POST['name'];
   echo json_encode(array('name' => $_SESSION['name']);
?>
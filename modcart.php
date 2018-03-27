<?php
session_start();
//connect db
include 'database.php';
//connect and query
mysql_select_db("mattsrecord");
if(isset($_POST['quantity'])){
    $qty = $_POST['quantity'];
}

if (isset($_POST['inventory_id'])) {
    $prodnum = $_POST['inventory_id'];
}

if (isset($_POST['modified_hidden'])) {
    $prodnum = $_POST['modified_hidden'];
}

if (isset($_POST['modified_quan'])) {
    $prodnum = $_POST['modified_quan'];
}
$sess = session_id();
$action = $_REQUEST['action'];

switch ($action) {
    case "add";
     $query = "INSERT INTO tempcart{
         temp_cart_sess,
         temp_cart_quan,
         temp_cart_prodnum,
         
     };
}

?>
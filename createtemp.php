<?php

// INCLUDE DATABASE 
include 'database.php';

//Get DB
mysql_select_db("mattsrecords");

//make a temp shopping cart
$query = "CREATE TABLE tempcart(
  tempcart_hidden INT(10) NOT NULL AUTO_INCREMENT,
  temp_cart_session CHAR(50) NOT NULL,
  temp_cart_prodnum CHAR(5) NOT NULL,
  temp_cart_quan INT(3) NOT NULL,
  PRIMARY KEY (tempcart_hidden),
  KEY(temp_cart_session))";
 $temp = mysql_query($query)
    or die(mysql_error());
 echo "This is your temporary shopping cART!" ;    
?>
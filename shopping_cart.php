<?php
if (!session_id()) {
    session_start();
}// connect to the database
//connect to database
      include 'database.php'; 
      
      $dbconn = getDatabaseConnection();
      $dbconn-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>

<html>
    <head>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <title>Shopping Cart! </title>
    </head>
    <body>
    <div class="logo">
    <img src="img/header.jpg"> <span class="title">Matt's Records</span>
    </div>
    <div align="center">
    You Cart Currently has
    
    product(s). <br>
    
    <table border = "1" align="center" cellpadding="5">
        <tr>
            
            <td>Album</td>
            <td>Artist</td>
            <td>Price Each</td>
            <td>Quantity</td>
            <td></td>
            <td></td>
            </table>
                 

</body>
</html>
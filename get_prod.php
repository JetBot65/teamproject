<?php

//session start...lets look at the detail of our stuff
session_start();

// connect to database
 include 'database.php'; 
 $dbconn = getDatabaseConnection();
 $dbconn-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$albumn = $_POST ['Submit'];


?>

<html>
    <head>
        <title><?php echo $album_name; ?></title>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        
        <style>

* {
    box-sizing: border-box;
    
}

#shadow-image {
    border: 1px solid;
    padding: 10px;
    box-shadow: 5px 10px;
}
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}

th, td {
    text-align: left;
    padding: 16px;
}

tr:nth-child(even) {
    background-color: #f2f2f2
}
</style>

    </head>
    <body>
    <div align="center">
        <table cellpadding= "5" width= "90%">
           <?php 
            
            //query to get info on our product
            $sql = " SELECT album_name,songlist,artist_name,label_name,price FROM `Matt's_Inventory` natural join `Album` natural join `Artist` natural join `Record_Label` WHERE album_name='$albumn' ";
            $stmt =$dbconn->prepare($sql);
            $stmt->execute();
            // work image display
            echo "<td><img src='img/$albumn.jpg' alt='$albumn pic'/></td>";
             if ($stmt->rowCount() > 0){
                while($row=$stmt->fetch()){
                    echo "<tr>";
                    $abl_n = $row['album_name'];
                    echo "<td><strong>Album Name: </strong>$abl_n</td><br>";
                    $art_n = $row['artist_name'];
                    echo "<td><strong>Artist: </strong>$art_n</td><br>";
                    $sglt = $row['songlist'];
                    echo "<td><strong>Songlist</strong><br>$sglt</td><br>";
                    $prc = $row['price'];
                    echo "<td><strong>Price: $</strong>$prc</td>";
                    
                }
                
             }
             
           
           ?>
           
        </table>
        
        <?php
         echo "</ br> </ br>";
                 echo "<form action='shopping_cart.php' method='POST'>";
                 echo "<input type='hidden' name ='album' value='$abl_n'>";
                 echo "<input type='submit' name ='Cart' value='Add To Cart'>"; 
                 echo"</form>";
          ?>
        <hr width="200">
        <p><a href="ourstore.php">HOME</a></p>
    </div>
    </body>
</html>







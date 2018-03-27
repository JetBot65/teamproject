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
    </head>
    <body>
    <div align="center">
        <table cellpadding= "5" width= "90%">
           <?php 
            
            //query to get info on our product
            $sql = " SELECT album_name,songlist,artist_name,label_name,price FROM `Matt's_Inventory` natural join `Album` natural join `Artist` natural join `Record_Label` WHERE album_name='$albumn' ";
            $stmt =$dbconn->prepare($sql);
            $stmt->execute();
            echo "<td><img src='img/$albumn.jpg' alt='$albumn pic'/></td>";
             if ($stmt->rowCount() > 0){
                while($row=$stmt->fetch()){
                    echo "<tr>";
                    $abl_n = $row['album_name'];
                    echo "<td><strong>Album Name: </strong>$abl_n</td><br>";
                    $art_n = $row['artist_name'];
                    echo "<td><strong>Album Name: </strong>$art_n</td><br>";
                    $sglt = $row['songlist'];
                    echo "<td><strong>Songlist</strong><br>$sglt</td><br>";
                    $prc = $row['price'];
                    echo "<td><strong>Price: $</strong>$prc</td>";
                    /*<form method="POST" action="modcart.php?action=add">
                        <input type="hidden" name= "products_prodnum" 
                        value="<?php echo $products_prodnum; ?>"
                        <input type="submit" name="SUBMIT" value="Add To Cart">
                        </form>
                        <form method="POST" action='cart.php'>
                        <input type="submit" name="SUBMIT" value="View Cart">  
                        </form>
                    </td>
                    */
                    echo "</tr>";
                    
                }
             }
           
           ?>
        </table>
        <hr width="200">
        <p><a href="ourstore.php">HOME</a></p>
    </div>
    </body>
</html>







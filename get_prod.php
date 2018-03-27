<?php

//session start...lets look at the detail of our stuff
session_start();

// connect to database
 include 'database.php'; 
 $dbconn = getDatabaseConnection();
 $dbconn-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$albumn = $_POST ['Submit'];

//query to get info on our product
$sql = "SELECT album_name, songlist, artist_name, label_name, price FROM `Matt's_Inventory` natural join `Album` natural join 'Artist' natural join `Record_Label` WHERE album_name= : albumn";

$stmt =$dbconn->prepare($sql);


$stmt->execute ( array ( ':albumn'=> $albumn) );
?>

<html>
    <head>
        <title><?php echo $album_name; ?></title>
    </head>
    <body>
    <div align="center">
        <table cellpadding= "5" width= "90%">
            <tr>
                <td><a href=</a></td>
                <td><strong><?php echo $products_name; ?></strong><br>
                <?php echo $products_prodesc; ?><br \>
                <br>PRODUCT NUMBER:<?php echo $products_prodnum; ?> 
                <br>PRODUCT PRICE: <?php echo $products_price; ?><br>
                <form method="POST" action="modcart.php?action=add">
                    Quantity: <input type="text" name="qty" size="2"><br>
                    <input type="hidden" name= "products_prodnum" 
                    value="<?php echo $products_prodnum; ?>"
                    <input type="submit" name="SUBMIT" value="Add To Cart">
                    </form>
                    <form method="POST" action='cart.php'>
                    <input type="submit" name="SUBMIT" value="View Cart">  
                    </form>
                </td>
             </tr>
        </table>
        <hr width="200">
        <p><a href="ourstore.php">HOME</a></p>
    </div>
    </body>
</html>
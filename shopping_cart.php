<?php
     session_start();
  
//connect to database
      include 'database.php'; 
      
      $dbconn = getDatabaseConnection();
      $dbconn-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
      if(isset($_SESSION['cart'])){
          $_SESSION['cart'][] = $_POST['album'];
      } 
      else{
          $_SESSION['cart'] = array();
          $_SESSION['cart'][] = $_POST['album'];
      }
     // echo count($_SESSION['cart']);
     // print_r($_SESSION['cart']);
      $sql = "SELECT inventory_id, album_name, price
                FROM  `Matt's_Inventory` 
                NATURAL RIGHT OUTER JOIN  `Album` ";
      
                
      for($i = 0; $i < count($_SESSION['cart']); $i++){
           $temp = $_SESSION['cart'][$i];
          if($i == 0){
              $sql = $sql . "WHERE album_name='$temp'";
          }
          else{
              $sql = $sql ."OR album_name='$temp'";
          }
      }
      
      $stmt = $dbconn->prepare($sql);
      $stmt->execute();
      
      
?>

<html>
    <head>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <title>Shopping Cart! </title>
    </head>
    <body>
    <div class="logo">
    <span class="title">Matt's Records</span>
    </div>
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
   
    <table width="200" align="center">
        <tr>
            <td>Album</td>
            <td>Artist</td>
            <td>Price</td>
        </tr>
        <?php 
            if ($stmt->rowCount() > 0){
                while($row=$stmt->fetch()){
                  echo "<tr>";
                  echo "<td>". $row ['inventory_id'].str_repeat('&nbsp;', 1). "</td>";
                  echo "<form action='get_prod.php' method='POST'>";
                  echo "<td>";
                  $albnm = $row ['album_name'];
                  echo "<input type='submit' name ='Submit' value='$albnm'>"; 
                  echo "</td>";
                  echo"</form>";
                  echo "<td>". $row ['price'].str_repeat('&nbsp;', 1). "</td>";
                  echo"</tr>";
                }
            }
            else{
                  echo "nothing found";
            }
        ?>
    </table>
    <?php
         echo "</ br> </ br>";
         echo "<form method='POST'>";
         echo "<input type='submit' name ='Reset' value='End Session'>"; 
         echo"</form>";
         if(isset($_POST['Reset'])){
             echo "<meta http-equiv=refresh content=\"0; URL=ourstore.php\">";
             session_destroy();
         }
      ?>
    <hr width="200">
    <p><a href="ourstore.php">HOME</a></p>
</body>
</html>

            
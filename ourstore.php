
<!DOCTYPE html>
<html lang="en">
<head>
<title>Team Project CST336</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {
  margin: 0;
}

/* Style the header */
.header {
    background-color: #000000;
    padding: 10px;
  
}

.column {
    float:left;
    padding: 10px;
}

.column.side {
  float:clear;
    width: 10px;
}

</style>

<link href="css/styles.css" rel="stylesheet" type="text/css"/>
</head>
<body>
 <header>
  <div class="logo">
  <img src="img/header.jpg"> <span class="title">Matt's Records</span>
  </div>
  
    <div class="column side">
    <h2>CD'S/Records</h2>
  	<img src="img/Arrival.jpg" alt="picture of abba" class="left">
    <h2>Classic Albums!</h2>
   	<img src="img/Goodbye Yellow Brick Road.jpg" alt="picture of elton john" class="left">
   	</div>
  
 
 
  
  <div class="table">
  <table width="200" align="center">
    <h1>WHO ARE WE!</h1>
    <p>Matt's Record's is a special order online store</p>
     <p>that delivers oldschool cd'd and records.</p>
    <tr>
      <td>inventory_id</td>
       <td>albumname</td>
        <td>price</td>
         <td>quantity</td>
    </tr>
    </div>
    <?php
    //connect to database
      include 'database.php'; 
      
      $dbconn = getDatabaseConnection();
      $dbconn-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      
      //sql statemen
      $sql = " SELECT inventory_id,album_name,price,quantity FROM `Album` NATURAL JOIN `Matt's_Inventory` ";
      //prepare for sql
      $stmt = $dbconn->prepare($sql);
      
      $stmt->execute();
      
      // The results of teh query
      
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
          echo "<td>". $row ['quantity'].str_repeat('&nbsp;', 1). "</td>";
          echo"</tr>";
        }
      }
      else{
        echo "nothing found";
      }
      
   ?>
  </table>
  </body>
</html>
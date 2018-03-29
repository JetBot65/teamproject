
<?php
    $filterText = '';
    // We only care about the filter if we are posting back
    if ('POST' === $_SERVER['REQUEST_METHOD']) 
    {
        $filterText = $_POST['filterText'];
        $searchType = $_POST['searchType'];
        $order = $_POST['order'];
    }
    
    //echo ($filterText);
    //echo ($searchType);
    
    
    include 'database.php'; 
      $dbconn = getDatabaseConnection();
      $dbconn-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    

     //sql statement
      
             $sql = "SELECT inventory_id,album_name, quantity, price
                FROM  `Matt's_Inventory` 
                NATURAL RIGHT OUTER JOIN  `Album`";
 
     
            if($searchType == inventory) {
                
                $sql = $sql . "WHERE inventory_id LIKE '%$filterText%' ";
                                
                
            }
           else if($searchType == price) {
                
                $sql = $sql . "WHERE price LIKE '%$filterText%'";
                
            }
           else if($searchType == quantity) {
                
                $sql = $sql . "WHERE quantity LIKE '%$filterText%'";
                
            }
           else if($searchType == album) {
                
                $sql = $sql . "WHERE album_name LIKE '%$filterText%'";
                
            }
            else 
            {
                $sql = $sql . "
                    WHERE `Matt's_Inventory`.inventory_id LIKE CONCAT('%', :filterText, '%')
                    OR price LIKE CONCAT('%', :filterText, '%')
                    OR quantity LIKE CONCAT('%', :filterText, '%')
                    OR album_name LIKE CONCAT('%', :filterText, '%')
                    "; 
            }
            if($order == asc)
            {
                $sql = $sql. " ORDER BY inventory_id ASC";
            }
            if($order == desc)
            {
                $sql = $sql. " ORDER BY inventory_id DESC ";
            }
            
              
       // sql filter
       /*$sql = $sql . "
        WHERE `Matt's_Inventory`.inventory_id LIKE CONCAT('%', :filterText, '%')
        OR price LIKE CONCAT('%', :filterText, '%')
        OR quantity LIKE CONCAT('%', :filterText, '%')
        OR album_name LIKE CONCAT('%', :filterText, '%')
        "; */
              
      //prepare for sql
      $stmt = $dbconn->prepare($sql);
     $stmt->execute(array(':filterText' => $filterText));
      
      
      
      // The results of the query
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Team Project CST336</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<link href="css/styles.css" rel="stylesheet" type="text/css"/>
</head>
<body>
  <div class="logo">
  <span class="title">Matt's Records</span>
  </div>
  
  <div class="row">
  <div class="column">
  <h2>CD'S/Records</h2> 
    <img src="img/Arrival.jpg" alt="abba">
  </div>
  <div class="column">
     <h2>Classic Albums!</h2>
    <img src="img/Goodbye Yellow Brick Road.jpg">
  </div>
  <div class="column">
    <h2>Best Selection!</h2>
    <img src="img/Escape.jpg">
  </div>
</div>
  
   
 
 
   <form action="ourstore.php" method="POST">
            <div class="input-group filter-area">
                <input type="radio" name="order" value="asc"> Acending Order<br>
                <input type="radio" name="order" value="desc"> Decending Order<br>
                <select name="searchType">
                        <option value="sType">Search Type</option>
                        <option value="inventory">Inventory</option>
                        <option value="album">Album</option>
                        <option value="price">Price</option>
                        <option value="quantity">Quantity</option>
              </select>
              <br><br>
                
                
                <input type="text" name="filterText" class="form-control"aria-label="Text input with segmented dropdown button">
            
                <div class="input-group-append">
                    <input type="submit" value="Filter" class="btn btn-outline-secondary">
                </div>
            
            </div>
    </form>
  
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
    
      
      // The results of the query
      
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

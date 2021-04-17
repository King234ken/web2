<?php 
    session_start(); 
    // require("includes/connection.php"); 
    if(isset($_GET['page'])){ 
          
        $pages=array("products", "cart"); 
          
        if(in_array($_GET['page'], $pages)) { 
              
            $_page=$_GET['page']; 
              
        }else{ 
              
            $_page="products"; 
              
        } 
          
    }else{ 
          
        $_page="products"; 
          
    } 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
  
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    <link rel="stylesheet" href="css/reset.css" /> 
    <link rel="stylesheet" href="css/style.css" /> 
      
    <title>Shopping cart</title> 
  
</head> 
  
<body> 
      
    <div id="container"> 
    
        <div id="main"> 
        <h1>Product List</h1> 
    <table> 
        <tr> 
            <th>Name</th> 
            <th>Description</th> 
            <th>Price</th> 
            <th>Action</th> 
        </tr> 
        <tr> 
            <td>Product 1</td> 
            <td>Some random description</td> 
            <td>15 $</th> 
            <td><a href="#">Add to cart</a></td> 
        </tr> 
         <tr> 
            <td>Product 2</td> 
            <td>Some random description</td> 
            <td>25 $</th> 
            <td><a href="#">Add to cart</a></td> 
        </tr> 
        <?php 
  
    $sql="SELECT * FROM infomation ORDER BY name ASC"; 
    $query=mysqli_query($conn,$sql); 
      
    while ($row=mysqli_fetch_array($query)) { 
          
?> 
        <tr> 
            <td><?php echo $row['name'] ?></td> 
            <td><?php echo $row['description'] ?></td> 
            <td><?php echo $row['price'] ?>$</td> 
            <td><a href="index.php?page=products&action=add&id=<?php echo $row['id_product'] ?>">Add to cart</a></td> 
        </tr> 
<?php 
          
    } 
  
?>
    </table>
        </div><!--end main-->
          
        <div id="sidebar"> 
              
        </div><!--end sidebar-->
       
    </div><!--end container-->
    
    
  
</body> 
</html>
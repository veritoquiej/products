 <!DOCTYPE html>
 <html>
 <head>
     <title></title>
 </head>
 <body>
 
 </body>
 </html>
 <?php
$servername = "localhost";
$username = "root";
$password = "admin12345";
$dbname = "products";

$product_name = $_POST["user"];
$price  = $_POST["pass"];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", 'root', 'admin1234');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO user VALUES (null, '$ product_name ', '$price', true)";
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
$conn = null;
?> 
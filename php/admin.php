<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$dbname = "alfy";
$password = "aux12mar";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Add record to the database
    if (isset($_POST['add'])) {
        $category = $_POST['category'];
        $productName = $_POST['productName'];
        $price = $_POST['price'];

        $sql = "INSERT INTO product (category, productName, price) VALUES ('$category', '$productName', $price)";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error adding record: " . $conn->error;
        }
    }

    // Delete record from the database
    if (isset($_POST['delete'])) {
        $id = $_POST['id'];

        $sql = "DELETE FROM product WHERE id = $id";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    }

    // Edit record in the database
    if (isset($_POST['edit'])) {
        $id = $_POST['id'];
        $category = $_POST['category'];
        $productName = $_POST['productName'];
        $price = $_POST['price'];

        $sql = "UPDATE product SET category = '$category', productName = '$productName', price = $price WHERE id = $id";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
}

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/master.css">
    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>
    <div class="big-container">
    <header>
        <nav>
            <ul>
                <li>
                    <div class="logo">
                        <img src="../img/logo/logo.png" alt="logo" class="logoimg">
                    </div>
                </li>
                <li class="search centre">
                    <form action="" method="post">
                        <input name="search" type="search" id="search"  placeholder="search...">
                        <button type="submit" ></button>
                    </form>
                </li>
                <li>
                    <button onclick=location.href="../html/home.php" id="">home</button>
                </li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <form method="post" action="">
            <input type="number" name="id" id="id" hidden>
            <label for="cat">category</label>
            <select name="category" id="cat" name="cat" required>
                    <option value="Coffee">Coffee</option>
                    <option value="Milkshakes">Milkshakes</option>
                    <option value="HotDrinkes">Hot Drinkes</option>
                    <option value="Frappe">Frappe</option>
                    <option value="SoftDrinkes">Soft Drinkes</option>
                    <option value="BreakFast">Break Fast</option>
                    <option value="Smoothies">Smoothies</option>
                    <option value="Sandwiches">Sandwiches</option>
                    <option value="MiniPizza">Mini Pizza</option>
                    <option value="NaturalDrinkes">Natural Drinkes</option>
                    <option value="Desserts">Desserts</option>
                </select>
            <label for="pro">producte</label>
            <input type="text" id="pro" placeholder="Producte Name" name="productName" required>
            <label for="price">price</label>
            <input type="number" id="price" placeholder="price" name="price" required>
            <input type="submit" name="add" value="Add" class="submit">
            <input type="submit" name="delete" value="Delete" class="submit">
            <input type="submit" name="edit" value="Edit" class="submit">
        </form>

        <div class="table">
            <table>

                <tr>
                    <th hidden>id</th>
                    <th>category</th>
                    <th>Producte</th>
                    <th>Price</th>
                    <th>select</th>
                </tr>

                <tbody>
                    <?php 
                  

                        // Check connection
                        if ($conn->connect_error) {
                            echo"la2";
                        die("Connection failed: " . $conn->connect_error);
                        }
                        $sql1 = "SELECT * from product";
                        $result = $conn->query($sql1);
                        $index =0;
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                
                                echo <<<"here"
                                <tr>
                                    <td id="id$index" hidden>$row[id]</td>
                                    <td id="cat$index">$row[category]</td>
                                    <td id="name$index">$row[productName]</td>
                                    <td id="price$index">$row[price]</td>
                                    <td><button class="edite" id="edite$index" onclick="btnedite($index)">select</button></td>
                                </tr>
                                here;
                                $index++;
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>

    </div>

    </div>
    <footer>
        <span id="footer">&copy;</span>
        <span>
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="" class="fa fa-instagram"></a>
        </span>
    </footer>

        <script src="../js/database.js" async defer></script>
        <script src="../js/footer.js" async defer></script>
</body>

</html>

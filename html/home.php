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
    <link rel="stylesheet" href="../css/popup.css">
    <link rel="stylesheet" href="../css/home.css">
</head>

<body>
    <?php 
    $servername = "localhost";
    $username = "root";
    $dbname = "alfy";
    $password = "aux12mar";
    $conn = new mysqli($servername, $username, $password,$dbname);
?>
    <div id="bigContainer" class="big-container">
    <header>
        <nav>
            <ul>
                <li>
                    <div class="logo">
                        <img src="../img/logo/logo.png" alt="logo" class="logoimg">
                    </div>
                </li>
                <li class="search centre">
                    <form  method="post">
                        <input type="text" id="search" name = "search" placeholder="search...">
                        <button type="submit" name = "btnsearch"><i class="fa fa-search"></i></button>
                    </form>
                </li>
                <li>
                    <button onclick="openPopup()" id="admin">admin</button>
                </li>
            </ul>
        </nav>
    </header>
    <div class="container">

    </div>
    <div class="backpopup centre" id="backpopup">
        <div class="popup centre">
            <form action="../php/database.php"></form>
            <label for="password">password</label>
            <input type="password" id="password" class="password">
            <button type="submit" id="submit" class="sub"> ok</button>
            <button onclick="closePopup()" class="exit">x</button>
        </div>
    </div>


    <div class="continer">

        <div class="side-nav">
            <form action="" method="post">
            <ul>
            <li class="list">
                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                        <button type="submit" name="Coffee">Coffee</button>
                        <button type="submit" name="Milkshakes">Milkshakes</button>
                        <button type="submit" name="HotDrinkes">Hot Drinkes</button>
                        <button type="submit" name="Frappe">Frappe</button>
                        <button type="submit" name="SoftDrinkes">Soft Drinkes</button>
                        <button type="submit" name="BreakFast">Break Fast</button>
                        <button type="submit" name="Smoothies" >Smoothies</button>
                        <button type="submit" name="Sandwiches">Sandwiches</button>
                        <button type="submit" name="MiniPizza">Mini Pizza</button>
                        <button type="submit" name="NaturalDrinkes">Natural Drinkes</button>
                        <button type="submit" name="Desserts">Desserts</button>
                    </div>
                    <span class="list" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
                </li>
                <li class="btnnav"><button type="submit" name="Coffee">coffee</button></li>
                <li class="btnnav"><button type="submit" name="Milkshakes" >Milkshakes</button></li>
                <li class="btnnav"><button type="submit" name="HotDrinkes" >Hot Drinkes</button></li>
                <li class="btnnav"><button type="submit" name="Frappe" >Frappe</button></li>
                <li class="btnnav"><button type="submit" name="SoftDrinkes" >Soft Drinkes</button></li>
                <li class="btnnav"><button type="submit" name="BreakFast" >Break Fast</button></li>
                <li class="btnnav"><button type="submit" name="Smoothies" >Smoothies</button></li>
                <li class="btnnav"><button type="submit" name="Sandwiches" >Sandwiches</button></li>
                <li class="btnnav"><button type="submit" name="MiniPizza" >Mini Pizza</button></li>
                <li class="btnnav"><button type="submit" name="NaturalDrinkes" >Natural Drinkes</button></li>
                <li class="btnnav"><button type="submit" name="Desserts" >Desserts</button></li>
            </ul>
            </form>
            
        </div>
        <div class="cards-content" id="cards-content">
       
        <?php
        if(isset($_POST["Coffee"])){
            $sql1 = "SELECT * from product where category = 'Coffee';";
            $result = $conn->query($sql1);
                $index =0;
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo <<<"here"
                        <div class="card">
                            <img src="../img/icons/coffee.jpeg">
                            <span>
                                <h4 class="name">$row[productName]</h4>
                                <p class="price">$row[price]</p>
                            </span>
                        </div>
                        here;
                        $index++;
                    }
                }
        } 
        if(isset($_POST["Milkshakes"])){
            $sql1 = "SELECT * from product where category = 'Milkshakes';";
            $result = $conn->query($sql1);
                $index =0;
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo <<<"here"
                        <div class="card">
                            <img src="../img/icons/milkshakep.png">
                            <span>
                                <h4 class="name">$row[productName]</h4>
                                <p class="price">$row[price]</p>
                            </span>
                        </div>
                        here;
                        $index++;
                    }
                }
        }
        if(isset($_POST["HotDrinkes"])){
            $sql1 = "SELECT * from product where category = 'HotDrinkes';";
            $result = $conn->query($sql1);
                $index =0;
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo <<<"here"
                        <div class="card">
                        <img src="../img/icons/hotdrinke.jpg">
                            <span>
                                <h4 class="name">$row[productName]</h4>
                                <p class="price">$row[price]</p>
                            </span>
                        </div>
                        here;
                        $index++;
                    }
                }
        }
        if(isset($_POST["Frappe"])){
            $sql1 = "SELECT * from product where category = 'Frappe';";
            $result = $conn->query($sql1);
                $index =0;
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo <<<"here"
                        <div class="card">
                        <img src="../img/icons/frappap.png">
                            <span>
                                <h4 class="name">$row[productName]</h4>
                                <p class="price">$row[price]</p>
                            </span>
                        </div>
                        here;
                        $index++;
                    }
                }
        }
        if(isset($_POST["SoftDrinkes"])){
            $sql1 = "SELECT * from product where category = 'SoftDrinkes';";
            $result = $conn->query($sql1);
                $index =0;
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo <<<"here"
                        <div class="card">
                        <img src="../img/icons/softdrinke.avif">
                            <span>
                                <h4 class="name">$row[productName]</h4>
                                <p class="price">$row[price]</p>
                            </span>
                        </div>
                        here;
                        $index++;
                    }
                }
        }
        if(isset($_POST["BreakFast"])){
            $sql1 = "SELECT * from product where category = 'BreakFast';";
            $result = $conn->query($sql1);
                $index =0;
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo <<<"here"
                        <div class="card">
                        <img src="../img/icons/breackfast.jpg">
                            <span>
                                <h4 class="name">$row[productName]</h4>
                                <p class="price">$row[price]</p>
                            </span>
                        </div>
                        here;
                        $index++;
                    }
                }
        }
        if(isset($_POST["Smoothies"])){
            $sql1 = "SELECT * from product where category = 'Smoothies';";
            $result = $conn->query($sql1);
                $index =0;
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo <<<"here"
                        <div class="card">
                        <img src="../img/icons/smoothiep.png">
                            <span>
                                <h4 class="name">$row[productName]</h4>
                                <p class="price">$row[price]</p>
                            </span>
                        </div>
                        here;
                        $index++;
                    }
                }
        }
           if(isset($_POST["Sandwiches"])){
            $sql1 = "SELECT * from product where category = 'Sandwiches';";
            $result = $conn->query($sql1);
                $index =0;
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo <<<"here"
                        <div class="card">
                        <img src="../img/icons/sandwich.jpg">
                            <span>
                                <h4 class="name">$row[productName]</h4>
                                <p class="price">$row[price]</p>
                            </span>
                        </div>
                        here;
                        $index++;
                    }
                }
           }
           if(isset($_POST["MiniPizza"])){
            $sql1 = "SELECT * from product where category = 'MiniPizza';";
            $result = $conn->query($sql1);
                $index =0;
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo <<<"here"
                        <div class="card">
                        <img src="../img/icons/min pizza.jpg">
                            <span>
                                <h4 class="name">$row[productName]</h4>
                                <p class="price">$row[price]</p>
                            </span>
                        </div>
                        here;
                        $index++;
                    }
                }
            }if(isset($_POST["NaturalDrinkes"])){ 
                $sql1 = "SELECT * from product where category = 'NaturalDrinkes';";
                $result = $conn->query($sql1);
                    $index =0;
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo <<<"here"
                            <div class="card">
                            <img src="../img/icons/juice.png">
                                <span>
                                    <h4 class="name">$row[productName]</h4>
                                    <p class="price">$row[price]</p>
                                </span>
                            </div>
                            here;
                            $index++;
                        }
                    }
                }
            if(isset($_POST["Desserts"])){
                $sql1 = "SELECT * from product where category = 'Desserts';";
                $result = $conn->query($sql1);
                    $index =0;
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo <<<"here"
                            <div class="card">
                            <img src="../img/icons/dessert .jpg">
                                <span>
                                    <h4 class="name">$row[productName]</h4>
                                    <p class="price">$row[price]</p>
                                </span>
                            </div>
                            here;
                            $index++;
                        }
                    }
            }
            if(isset($_POST["btnsearch"])){
                $productName = $_POST['search'];
                $sql1 = "SELECT * from product where productName like '%$productName%';";
                $result = $conn->query($sql1);
                    $index =0;
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            if($row["category"] == "Coffee"){
                                echo <<<"here"
                                        <div class="card">
                                        <img src="../img/icons/coffee.jpeg">
                                            <span>
                                                <h4 class="name">$row[productName]</h4>
                                                <p class="price">$row[price]</p>
                                            </span>
                                        </div>
                                        here;
                            $index++;
                            }
                            if($row["category"] == "Frappe"){
                                echo <<<"here"
                                    <div class="card">
                                        <img src="../img/icons/milkshakep.png">
                                        <span>
                                            <h4 class="name">$row[productName]</h4>
                                            <p class="price">$row[price]</p>
                                        </span>
                                    </div>
                                    here;
                            $index++;
                            }
                            if($row["category"] == "Milkshakes"){
                                echo <<<"here"
                        <div class="card">
                            <img src="../img/icons/milkshakep.png">
                            <span>
                                <h4 class="name">$row[productName]</h4>
                                <p class="price">$row[price]</p>
                            </span>
                        </div>
                        here;
                            $index++;
                            }
                            if($row["category"] == "HotDrinkes"){
                                echo <<<"here"
                                echo <<<"here"
                                <div class="card">
                                <img src="../img/icons/hotdrinke.jpg">
                                    <span>
                                        <h4 class="name">$row[productName]</h4>
                                        <p class="price">$row[price]</p>
                                    </span>
                                </div>
                                here;
                            $index++;
                            }
                            if($row["category"] == "SoftDrinkes"){
                                echo <<<"here"
                                <div class="card">
                                <img src="../img/icons/softdrinke.avif">
                                    <span>
                                        <h4 class="name">$row[productName]</h4>
                                        <p class="price">$row[price]</p>
                                    </span>
                                </div>
                                here;
                            $index++;
                            }
                            if($row["category"] == "BreakFast"){
                                    echo <<<"here"
                                        <div class="card">
                                        <img src="../img/icons/breackfast.jpg">
                                            <span>
                                                <h4 class="name">$row[productName]</h4>
                                                <p class="price">$row[price]</p>
                                            </span>
                                        </div>
                                     here;
                            $index++;
                            }
                            if($row["category"] == "Smoothies"){
                                echo <<<"here"
                        <div class="card">
                        <img src="../img/icons/smoothiep.png">
                            <span>
                                <h4 class="name">$row[productName]</h4>
                                <p class="price">$row[price]</p>
                            </span>
                        </div>
                        here;
                            $index++;
                            }
                            if($row["category"] == "Sandwiches"){
                                echo <<<"here"
                        <div class="card">
                        <img src="../img/icons/sandwich.jpg">
                            <span>
                                <h4 class="name">$row[productName]</h4>
                                <p class="price">$row[price]</p>
                            </span>
                        </div>
                        here;
                            $index++;
                            }
                            if($row["category"] == "MiniPizza"){
                                echo <<<"here"
                        <div class="card">
                        <img src="../img/icons/min pizza.jpg">
                            <span>
                                <h4 class="name">$row[productName]</h4>
                                <p class="price">$row[price]</p>
                            </span>
                        </div>
                        here;
                            $index++;
                            }
                            if($row["category"] == "NaturalDrinkes"){
                                echo <<<"here"
                                    <div class="card">
                                        <img src="../img/icons/milkshakep.png">
                                        <span>
                                            <h4 class="name">$row[productName]</h4>
                                            <p class="price">$row[price]</p>
                                        </span>
                                    </div>
                                    here;
                            $index++;
                            }
                            if($row["category"] == "NaturalDrinkes"){
                                echo <<<"here"
                            <div class="card">
                            <img src="../img/icons/juice.png">
                                <span>
                                    <h4 class="name">$row[productName]</h4>
                                    <p class="price">$row[price]</p>
                                </span>
                            </div>
                            here;
                            $index++;
                            }
                            if($row["category"] == "Desserts"){
                                echo <<<"here"
                                <div class="card">
                                <img src="../img/icons/dessert .jpg">
                                    <span>
                                        <h4 class="name">$row[productName]</h4>
                                        <p class="price">$row[price]</p>
                                    </span>
                                </div>
                                here;
                            $index++;
                            }
                        }
                    }
            }
        ?>
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
    </div>


    <script src="../js/home.js" async defer></script>
    <script src="../js/footer.js" async defer></script>
</body>

</html>

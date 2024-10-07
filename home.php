<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechNook</title>
    <link rel="stylesheet" href="TechNookWeb.css">
</head>
<body>
<?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
    <!--this is nav bar-->
    <nav class="navbar">
        <div class="navdiv">
            <!-- <div class="logo">
                <img src="logo1.jfif" alt="Logo" class="logo-img">
            </div> -->
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">About Us</a></li>
            </ul>
            <div class="nav-buttons">
                <a href="#" class="btn">Sign Up</a>
                <a href="#" class="btn">Log In</a>
            </div>
        </div>
    </nav>
    <!--main page-->
    <div class="main">
        <div class="maintext">
            <h2>Topic</h2>
            <h1>THE BEST COLLECTION</h1>
            <p>This is the place for the computer enthusiasts</p>
             <button>shop now</button>      
        </div>
        <img src="./img/black.png" alt="laptop and pc photos" class="img2">
    </div>

    <!--the cards for the products-->
    <div class="topic"> 
        <div class="head">
            <h1>PC</h1>
        </div>
        <div class="products">
            <div class="prod">
                <img src="img/acer.webp" alt="pc picture">
                <h4>Acer Nitro N50-650 Gaming Desktop -13th Gen i5</h4><br>
                <p>Price-<span>143000</span></p>
                <button>Add to cart</button>
            </div>
            <br>
            <div class="prod">
                <img src="img/hppc.jfif" alt="pc picture">
                <h4>HP Pro Tower 280 G9 PCI i5-12400</h4><br>
                <p>Price-<span>70000</span></p>
                <button>Add to cart</button>
            </div>
        
            <br>
            <div class="prod">
                <img src="img/orion.webp" alt="pc picture">
                <h4>Acer Predator Orion 3000 Gaming Desktop I5</h4><br>
                <p>Price-<span>500000</span></p>
                <button>Add to cart</button>
            </div>
        </div>
    </div>

    <!--for the laptops-->
    <div class="topic"> 
        <div class="head">
            <h1>Laptops</h1>
        </div>
        <div class="products">
            <div class="prod">
                <img src="img/vostro.jpg" alt="pc picture">
                <h4>Dell Vostro 15 3520 i7 12th Gen</h4><br>
                <p>Price-<span>Rs.132500</span></p>
                <button>Add to cart</button>
            </div>
            <br>
            <div class="prod">
                <img src="img/latitude.jpg" alt="pc picture">
                <h4>Dell Latitude 14 3440 - i5 1235U</h4><br>
                <p>Price-<span>Rs.70000</span></p>
                <button>Add to cart</button>
            </div>
            <br>
            <div class="prod">
                <img src="img/dell.webp" alt="pc picture">
                <h4>Dell Vostro 3430 i5 13th Gen</h4><br>
                <p>Price-<span>Rs.85000</span></p>
                <button>Add to cart</button>
            </div>
        </div>
    </div>
    <!--footer-->
    <div class="footer">
        <div class="footertext">
            <h1>Topic</h1>
            <h4>The best product provider</h4>
            <p>Services with warrantee</p>
        </div>

        <div class="footertext">
            <h4>KATHMANDU</h4>
            <p>topic@gmail.com</p>
            <p>9898033989</p>
        </div>

        <div class="footertext">
            <h4>for better future forward</h4>
            <p>follow us on</p>
            <!--images of the social media-->
        </div>
    </div>
</body>
</html>



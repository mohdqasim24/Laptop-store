<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>SHOPPING CART</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="MobileStore.css" type="text/css">
    </head>
 
<body>
        <header>
          
        <ul>
            <li class="title">OnlineStore</li>

            <li><a href="contactus.html">CONTACT US</a></li>
            <li><a href="feedback.html">FEEDBACK</a></li>
            <li><a href="viewCart.php">Cart</a></li>
           
           </ul>

    </header>

    <div class="cart"><h1>Your Cart Items</h1></div>

<div class="table">
    <table>
        <thead>
            <tr>
                <th>SNO</th>
                <th>Name</th>
                <th>Price</th>
        
                <th>Delete</th>
            </tr>
        </thead> 
        <tbody>
           
            <?php
            $SNO=1;
            foreach($_SESSION as $product){
            $p=0;
               
                echo"<tr>";
                
                echo"<td>".($SNO++)."</td>";
                echo"<form action='editCart.php' method='post'>";
                foreach($product as $key => $value){
                    
                    if($key==1){
                        echo"<input type='hidden' name='name$key' value'".$value."'>";
                        echo"<td>".$value."</td>";
                        $p=$value;
                    }
                    else if($key==0){
                        echo"<input type='hidden' name='name$key' value'".$value."'>";
                        echo"<td>".$value."</td>";
                    }
                }
               
                echo"<td><input type='submit' name='Event' value='Delete' class='btn btn-danger'></td>";
                
                echo"</form>";
                echo"</tr>";
            }
            
            ?>
           
        </tbody>
    </table>
    </div>
    <a href="Add.html"><button type="button" class="btn btn-warning">Place Your Order</button></a>
    <!--Footer-->

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1>Brands</h1>
                <p>Apple</p>
                <p>Xiaomi</p>
                <p>Vivo</p>
                <p>Oppo</p>
                <p>Realme</p>
            </div>
            <div class="col-md-4">
                <h1>Company</h1>
               <p>E-commerce is revolutionizing the way we <br> all shop in India.
                    Why do you want to hop from <br> one store to another 
                 in search of the latest phone <br> when you can find it on the Internet in a single click.</p>
            </div>
            <div class="col-md-4">
                <h1>Latest Features</h1>
                <p>Powerfull-Processor</p>
                <p>120Hz-Display</p>
                <p>SAmoled-Display</p>
                <p>Quad-Camera</p>
                
            </div>
        </div>
    </div>



</footer>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>ONLINE STORE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="MobileStore.css" type="text/css">
    </head>
 
<body>
        <header>
          
        <ul>
            <li class="title">OnlineStore</li>

             <li><a href="#"><div class="options">
             <form action="">
                 <select name="" id="" onchange="location=this.value;">
                    <option value="" selected>MORE</option>
                     <option value="login.html">LOG IN</option>
                     <option value="logout.php">LOG OUT</option>
                 </select>
             </form>
             </div></a></li>
            <li><a href="viewCart.php">CART</a></li>
            <li><a href="contactus.html">CONTACT US</a></li>
            <li><a href="feedback.html">FEEDBACK</a></li>
           
           </ul>

    </header>

  <!--Image Slideshow By Javascript-->
  <div class="slideshow">
      <script>
          let i=0;
          let images=[];
          let time=3000;

          images[0]='images/1.webp';
          images[1]='images/2.avif';
          images[2]='images/3.avif';
          images[3]='images/4.jpg';

        function changeImg(){
            document.slide.src=images[i];

            if(i<images.length-1){
                i++;
            }
            else{
              i=0;
            }
            setTimeout("changeImg()",time);
        }
        window.onload=changeImg;

      </script>
      </div>
      <img name="slide" width="1525px" height="400px">

      <div>
          <ol>
              <li><a href="xiaomi.html"><img src="logo\1.png"></a></li>
              <li><a href="realme.html"><img src="logo\2.jpg"></a></li>
              <li><a href="oppo.html"><img src="logo\3.webp"></a></li>
              <li><a href="apple.html"><img src="logo\logo4.png"></a></li>
              <li><a href="vivo.html"><img src="logo\5.jpg"></a></li>
          </ol>
      </div>

      <!--On Sale-->
      <section>
          <div class="container">
              <div class="title-design">
                  <h2>On Sale</h2>
              </div>
          </div>
      </section>

     <!--Categories-->   

     <section class="categories">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
               <a href="Iphone 11 Pro.html"><img src="apple\macbookair.webp"></a>
                <div class="product-bottom">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <h3>Macbook Air M1</h3>
                    <h5>RS-84,990/-</h5>
                </div>
            </div>
            <div class="col-md-3">
                <a href="Oppo F15.HTML"><img src="lenovo\flex.webp"></a>
                <div class="product-bottom">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <h3>Ideapad Flex</h3>
                    <h5>RS-51,999/-</h5>
                </div>
            </div>
            <div class="col-md-3">
                <a href="VIVO S1 PRO.html"><img src="acer\aspire3.webp"></a>
                <div class="product-bottom">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <h3>Aspire 3</h3>
                    <h5>RS-35,999/-</h5>
                </div>
            </div>
            <div class="col-md-3">
                <a href="Realme X2 Pro.html"><img src="hp\pavilion.webp"></a>
                <div class="product-bottom">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <h3>Pavilion</h3>
                    <h5>RS-54,999/-</h5>
                </div>
            </div>
        </div>

    </div>
     </section>

               <!--Latest Products-->

     <section>
         <div class="container">
             <div class="title-design">
                 <h2>NEW</h2>
             </div>
         </div>
     </section>

  
     <section class="categories">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                   <a href="Realme 6.html"><img src="hp\corei3.webp"></a>
                    <div class="product-bottom">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <h3>Core i3</h3>
                        <h5>RS-42,999/-</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <a href="Oppo Reno 3 Pro.html"><img src="lenovo\legion.webp"></a>
                    <div class="product-bottom">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <h3>Legion 5</h3>
                        <h5>RS-79,999/-</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <a href="Realme C3.html"><img src="hp\corei5.webp"></a>
                    <div class="product-bottom">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <h3>RCore i5</h3>
                        <h5>RS-54,999/-</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <a href="8pro.html"><img src="hp\ryzen.webp"></a>
                    <div class="product-bottom">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <h3>Inspiron Ryzen 3</h3>
                        <h5>RS-36,990/-</h5>
                    </div>
                </div>
            </div>
    
        </div>
         </section>

<!--Footer-->

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1>Brands</h1>
                <p>Apple</p>
                <p>Dell</p>
                <p>HP</p>
                <p>Lenovo</p>
                <p>Acer</p>
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
                <p>Backlit-Display</p>
                <p>HD-Camera</p>
                
            </div>
        </div>
    </div>



</footer>
</body>
</html>
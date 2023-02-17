
<?php include('../photo.php'); 
include_once('../conn.php');
session_start();





if(isset($_POST['send'])){
    $sql =$database->prepare("SELECT * FROM files "); 
$sql->execute();

foreach($sql AS $result){
 ;

 echo "<h1>" . $result['prix'] . "</h1>";
 echo "<p>" . $result['titre'] . "</p>";
}
    }
  





if(isset($_SESSION['user'])){
if($_SESSION['user']->ROLE === "USER"){
echo '<div class="shadow p-3 mb-1 bg-white rounded mt-5"> Welcome ' .$_SESSION['user']->NAME . "</div>";
echo 'Welcome ' .$_SESSION['user']->EMAIL ;
echo 'Welcome ' .$_SESSION['user']->AGE ;
echo "<form> <button class='btn btn-danger w-100' type='submit' name='logout'>تسجيل خروج</button></form>";
}else{
    header("location:http://localhost/codercher/login.php",true); 
    die("");
}
}else{
    header("location:http://localhost/codercher/login.php",true); 
    die(""); 
}

if(isset($_GET['logout'])){
    session_unset();
    session_destroy();
    header("location:http://localhost/codercher/login.php",true); 
    }
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Add to Cart Interaction Example</title>
  <link rel="stylesheet" href="../project/css/style.css">

</head>
<body>
                   
<!-- partial:index.partial.html -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<div id="wrapper">
<div class="cart-icon-top">
</div>

<div class="cart-icon-bottom">
</div>

<div id="checkout">
	CHECKOUT
</div>

<div id="info">
	<p class="i1">Add to cart interaction prototype by Virgil Pana</p>
<p>    Follow me on <a href="https://dribbble.com/virgilpana" style="color:#ea4c89" target="_blank">Dribbble</a> | <a style="color:#2aa9e0" href="https://twitter.com/virgil_pana" target="_blank">Twitter</a></p>
</div>

<div id="header">	
	<ul>
        <li><a href="">Home</a></li>
        <li><a href="">BRANDS</a></li>
        <li><a href="">DESIGNERS</a></li>
        <li><a href="">CONTACT</a></li>                                              
    </ul>		
</div>

<div id="sidebar">
	<h3>CART</h3>
    <div id="cart">
    	<span class="empty">No items in cart.</span>       
    </div>
    
    <h3>CATEGORIES</h3>
    <div class="checklist categories">
    	<ul>
        	<li><a href=""><span></span>New Arivals</a></li>
            <li><a href=""><span></span>Accesories</a></li>
            <li><a href=""><span></span>Bags</a></li>
            <li><a href=""><span></span>Dressed</a></li>
            <li><a href=""><span></span>Jackets</a></li>
            <li><a href=""><span></span>jewelry</a></li>
            <li><a href=""><span></span>Shoes</a></li>
            <li><a href=""><span></span>Shirts</a></li>
            <li><a href=""><span></span>Sweaters</a></li>
            <li><a href=""><span></span>T-shirts</a></li>
        </ul>
    </div>
    
    <h3>COLORS</h3>
    <div class="checklist colors">
    	<ul>
        	<li><a href=""><span></span>Beige</a></li>
            <li><a href=""><span style="background:#222"></span>Black</a></li>
            <li><a href=""><span style="background:#6e8cd5"></span>Blue</a></li>
            <li><a href=""><span style="background:#f56060"></span>Brown</a></li>
            <li><a href=""><span style="background:#44c28d"></span>Green</a></li>
        </ul>
        
        <ul>
        	<li><a href=""><span style="background:#999"></span>Grey</a></li>
            <li><a href=""><span style="background:#f79858"></span>Orange</a></li>
            <li><a href=""><span style="background:#b27ef8"></span>Purple</a></li>
            <li><a href=""><span style="background:#f56060"></span>Red</a></li>
            <li><a href=""><span style="background:#fff;border: 1px solid #e8e9eb;width:13px;height:13px;"></span>White</a></li>
        </ul>        
    </div>
    
    <h3>SIZES</h3>
    <div class="checklist sizes">
    	<ul>
        	<li><a href=""><span></span>XS</a></li>
            <li><a href=""><span></span>S</a></li>
            <li><a href=""><span></span>M</a></li>
        </ul>
        
        <ul>
        	<li><a href=""><span></span>L</a></li>
            <li><a href=""><span></span>XL</a></li>
            <li><a href=""><span></span>XXL</a></li>
        </ul>        
    </div>
    
     <h3>PRICE RANGE</h3>
     <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/price-range.png" alt="" />
</div>

<div id="grid-selector">
       <div id="grid-menu">
       	   View:
           <ul>           	   
               <li class="largeGrid"><a href=""></a></li>
               <li class="smallGrid"><a class="active" href=""></a></li>
           </ul>
       </div>
       
       Showing 1–9 of 48 results 
</div>

<div id="grid">
    <div class="product">
    	<div class="info-large">
        	<h4>FLUTED HEM DRESS</h4>
            <div class="sku">
            	PRODUCT SKU: <strong>89356</strong>
            </div>
             
            <div class="price-big">
            	<span>$43</span> $40
            </div>
             
            <h3>COLORS</h3>
            <div class="colors-large">
                <ul>
                    <li><a href="" style="background:#222"><span></span></a></li>
                    <li><a href="" style="background:#6e8cd5"><span></span></a></li>
                    <li><a href="" style="background:#f56060"><span></span></a></li>
                    <li><a href="" style="background:#44c28d"><span></span></a></li>
                </ul> 
            </div>

            <h3>SIZE</h3>
            <div class="sizes-large">
 				<span>XS</span>
                <span>S</span>
                <span>M</span>
                <span>L</span>
                <span>XL</span>
                <span>XXL</span>
            </div>
            
            <button class="add-cart-large">Add</button>                          
                         
        </div>
        <div class="make3D">
            <div class="product-front">
                <div class="shadow"></div>
                <?php echo '<img src="' .$getFile . '" width="300px" />'?>
                <div class="image_overlay" name="send"></div>
                
                <div class="view_gallery">View gallery</div>                
                <div class="stats">        	
                    <div class="stats-container">
                    <?php echo '<p class="card-text">' . $result["prix"] .' </p>' ?>
                  <?php echo '<h5 class="card-title"> ' .$result["titre"] . '</h5>' ?>    
                        <p>Summer dress</p>                                            
                        
                        <div class="product-options">
                        <strong>SIZES</strong>
                        <span>XS, S, M, L, XL, XXL</span>
                        <strong>COLORS</strong>
                        <div class="colors">
                            <div class="c-blue"><span></span></div>
                            <div class="c-red"><span></span></div>
                            <div class="c-white"><span></span></div>
                            <div class="c-green"><span></span></div>
                        </div>
                    </div>                       
                    </div>                         
                </div>
            </div>
            
            <div class="product-back">
                <div class="shadow"></div>
                <div class="carousel">
                    <ul class="carousel-container">
                        <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/1.jpg" alt="" /></li>
                        <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/2.jpg" alt="" /></li>
                        <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/3.jpg" alt="" /></li>
                    </ul>
                    <div class="arrows-perspective">
                        <div class="carouselPrev">
                            <div class="y"></div>
                            <div class="x"></div>
                        </div>
                        <div class="carouselNext">
                            <div class="y"></div>
                            <div class="x"></div>
                        </div>
                    </div>
                </div>
                <div class="flip-back">
                    <div class="cy"></div>
                    <div class="cx"></div>
                </div>
            </div>	  
        </div>	
    </div>
    
    
    <div class="product">
    <div class="info-large">
        	<h4>PLEAT PRINTED DRESS</h4>
            <div class="sku">
            	PRODUCT SKU: <strong>89356</strong>
            </div>
             
            <div class="price-big">
            	<span>$43</span> $39
            </div>
             
            <h3>COLORS</h3>
            <div class="colors-large">
                <ul>
                    <li><a href="" style="background:#222"><span></span></a></li>
                    <li><a href="" style="background:#6e8cd5"><span></span></a></li>
                    <li><a href="" style="background:#f56060"><span></span></a></li>
                    <li><a href="" style="background:#44c28d"><span></span></a></li>
                </ul> 
            </div>

            <h3>SIZE</h3>
            <div class="sizes-large">
 				<span>XS</span>
                <span>S</span>
                <span>M</span>
                <span>L</span>
                <span>XL</span>
                <span>XXL</span>
            </div>
            <form method=POST>
            <button name="send" class="add-cart-large">Add</button>     

                                 
</form>           
        </div>
        <div class="make3D">
            <div class="product-front">
                <div class="shadow"></div>
                <?php echo '<img src="' .$getFile . '" width="300px" />'?>
                <div class="image_overlay"></div>
                <div >Add to cart</div>
                <form method="POST">
<button  class="add_to_cart" type="submit" name="send">ارسال - Send</button>
</form>
                <div class="view_gallery">View gallery</div>
                <div class="stats">        	
                    <div class="stats-container">
                    <?php echo '<p class="card-text" name="prix"> '  . $result["prix"] .' </p>' ?>
                  <?php echo '<h5 class="card-title"> ' .$result["titre"] . '</h5>' ?>   
                        <p>Summer dress</p>                                            
               </form>               
                        <div class="product-options">
                        <strong>SIZES</strong>
                  <span>XS, S, M, L, XL, XXL</span>
                        <strong>COLORS</strong>
                        <div class="colors">
                            <div class="c-blue"><span></span></div>
                            <div class="c-red"><span></span></div>
                            <div class="c-white"><span></span></div>
                            <div class="c-green"><span></span></div>
                        </div>
                    </div>                       
                    </div>                         
                </div>
            </div>
            
            <div class="product-back">
                <div class="shadow"></div>
                <div class="carousel">
                    <ul class="carousel-container">
                        <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/2.jpg" alt="" /></li>
                        <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/3.jpg" alt="" /></li>
                        <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/4.jpg" alt="" /></li>
                    </ul>
                    <div class="arrows-perspective">
                        <div class="carouselPrev">
                            <div class="y"></div>
                            <div class="x"></div>
                        </div>
                        <div class="carouselNext">
                            <div class="y"></div>
                            <div class="x"></div>
                        </div>
                    </div>
                </div>
                <div class="flip-back">
                    <div class="cy"></div>
                    <div class="cx"></div>
                </div>
            </div>	  
        </div>	
    </div>
    
    <div class="product">
    <div class="info-large">
        	<h4>FLOWY SHIRT DRESS</h4>
            <div class="sku">
            	PRODUCT SKU: <strong>89356</strong>
            </div>
             
            <div class="price-big">
            	<span>$43</span> $39
            </div>
             
            <h3>COLORS</h3>
            <div class="colors-large">
                <ul>
                    <li><a href="" style="background:#222"><span></span></a></li>
                    <li><a href="" style="background:#6e8cd5"><span></span></a></li>
                    <li><a href="" style="background:#f56060"><span></span></a></li>
                    <li><a href="" style="background:#44c28d"><span></span></a></li>
                </ul> 
            </div>

            <h3>SIZE</h3>
            <div class="sizes-large">
 				<span>XS</span>
                <span>S</span>
                <span>M</span>
                <span>L</span>
                <span>XL</span>
                <span>XXL</span>
            </div>
            
            <button class="add-cart-large">Add To Cart</button>                          
                         
        </div>
        <div class="make3D">        
            <div class="product-front">
                <div class="shadow"></div>
                <img src="apparel3.jpg" alt="" />
                <div class="image_overlay"></div>
                <form method="POST">
<button  class="add_to_cart" type="submit" name="send">ارسال - Send</button>
</form>
                <div class="view_gallery">View gallery</div>
                <div class="stats">        	
                    <div class="stats-container">
                    <?php echo '<p class="card-text">' . $result["prix"] .' </p>' ?>
                  <?php echo '<h5 class="card-title"> ' .$result["titre"] . '</h5>' ?>   
                        <p>Summer dress</p>                                            
                        
                        <div class="product-options">
                        <strong>SIZES</strong>
                        <span>XS, S, M, L, XL, XXL</span>
                        <strong>COLORS</strong>
                        <div class="colors">
                            <div class="c-blue"><span></span></div>
                            <div class="c-red"><span></span></div>
                            <div class="c-white"><span></span></div>
                            <div class="c-green"><span></span></div>
                        </div>
                    </div>                       
                    </div>                         
                </div>
            </div>
            
            <div class="product-back">
                <div class="shadow"></div>
                <div class="carousel">
                    <ul class="carousel-container">
                        <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/3.jpg" alt="" /></li>
                        <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/4.jpg" alt="" /></li>
                        <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/1.jpg" alt="" /></li>
                    </ul>
                    <div class="arrows-perspective">
                        <div class="carouselPrev">
                            <div class="y"></div>
                            <div class="x"></div>
                        </div>
                        <div class="carouselNext">
                            <div class="y"></div>
                            <div class="x"></div>
                        </div>
                    </div>
                </div>
                <div class="flip-back">
                    <div class="cy"></div>
                    <div class="cx"></div>
                </div>
            </div>	  
        </div>	
    </div>
    
    
    <div class="product">
    <div class="info-large">
        	<h4>DOUBLE LAYER DRESS</h4>
            <div class="sku">
            	PRODUCT SKU: <strong>89356</strong>
            </div>
             
            <div class="price-big">
            	<span>$43</span> $39
            </div>
             
            <h3>COLORS</h3>
            <div class="colors-large">
                <ul>
                    <li><a href="" style="background:#222"><span></span></a></li>
                    <li><a href="" style="background:#6e8cd5"><span></span></a></li>
                    <li><a href="" style="background:#f56060"><span></span></a></li>
                    <li><a href="" style="background:#44c28d"><span></span></a></li>
                </ul> 
            </div>

            <h3>SIZE</h3>
            <div class="sizes-large">
 				<span>XS</span>
                <span>S</span>
                <span>M</span>
                <span>L</span>
                <span>XL</span>
                <span>XXL</span>
            </div>
            
            <button class="add-cart-large">Add To Cart</button>                          
                         
        </div>
        <div class="make3D">
            <div class="product-front">
                <div class="shadow"></div>
                <?php echo '<img src="' .$getFile . '" width="300px" />'?>
                <div class="image_overlay"></div>
                <form method="POST">
<button  class="add_to_cart" type="submit" name="send">ارسال - Send</button>
</form>
                <div class="view_gallery">View gallery</div>
                <div class="stats">        	
                    <div class="stats-container">
                    <?php echo '<p class="card-text">' . $result["prix"] .' </p>' ?>
                  <?php echo '<h5 class="card-title"> ' .$result["titre"] . '</h5>' ?>   
                        <p>Summer dress</p>                                            
                        
                        <div class="product-options">
                        <strong>SIZES</strong>
                        <span>XS, S, M, L, XL, XXL</span>
                        <strong>COLORS</strong>
                        <div class="colors">
                            <div class="c-blue"><span></span></div>
                            <div class="c-red"><span></span></div>
                            <div class="c-white"><span></span></div>
                            <div class="c-green"><span></span></div>
                        </div>
                    </div>                       
                    </div>                         
                </div>
            </div>
            
            <div class="product-back">
                <div class="shadow"></div>
                <div class="carousel">
                    <ul class="carousel-container">
                        <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/4.jpg" alt="" /></li>
                        <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/6.jpg" alt="" /></li>
                        <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/7.jpg" alt="" /></li>
                    </ul>
                    <div class="arrows-perspective">
                        <div class="carouselPrev">
                            <div class="y"></div>
                            <div class="x"></div>
                        </div>
                        <div class="carouselNext">
                            <div class="y"></div>
                            <div class="x"></div>
                        </div>
                    </div>
                </div>
                <div class="flip-back">
                    <div class="cy"></div>
                    <div class="cx"></div>
                </div>
            </div>	  
        </div>	
    </div>
    
    <div class="product">
    <div class="info-large">
        	<h4>BEAD DETAIL DRESS</h4>
            <div class="sku">
            	PRODUCT SKU: <strong>89356</strong>
            </div>
             
            <div class="price-big">
            	<span>$43</span> $39
            </div>
             
            <h3>COLORS</h3>
            <div class="colors-large">
                <ul>
                    <li><a href="" style="background:#222"><span></span></a></li>
                    <li><a href="" style="background:#6e8cd5"><span></span></a></li>
                    <li><a href="" style="background:#f56060"><span></span></a></li>
                    <li><a href="" style="background:#44c28d"><span></span></a></li>
                </ul> 
            </div>

            <h3>SIZE</h3>
            <div class="sizes-large">
 				<span>XS</span>
                <span>S</span>
                <span>M</span>
                <span>L</span>
                <span>XL</span>
                <span>XXL</span>
            </div>
            
            <button class="add-cart-large">Add To Cart</button>                          
                         
        </div>
        <div class="make3D">
            <div class="product-front">
                <div class="shadow"></div>
                <?php echo '<img src="' .$getFile . '" width="300px" />'?>
                <div class="image_overlay"></div>
                <form method="POST">
<button  class="add_to_cart" type="submit" name="send">ارسال - Send</button>
</form>
                <div class="view_gallery">View gallery</div>
                <div class="stats">        	
                    <div class="stats-container">
                    <?php echo '<p class="card-text">' . $result["prix"] .' </p>' ?>
                  <?php echo '<h5 class="card-title"> ' .$result["titre"] . '</h5>' ?>   
                        <p>Summer dress</p>                                            
                        
                        <div class="product-options">
                        <strong>SIZES</strong>
                        <span>XS, S, M, L, XL, XXL</span>
                        <strong>COLORS</strong>
                        <div class="colors">
                            <div class="c-blue"><span></span></div>
                            <div class="c-red"><span></span></div>
                            <div class="c-white"><span></span></div>
                            <div class="c-green"><span></span></div>
                        </div>
                    </div>                       
                    </div>                         
                </div>
            </div>
            
            <div class="product-back">
                <div class="shadow"></div>
                <div class="carousel">
                    <ul class="carousel-container">
                        <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/5.jpg" alt="" /></li>
                        <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/7.jpg" alt="" /></li>
                    </ul>
                    <div class="arrows-perspective">
                        <div class="carouselPrev">
                            <div class="y"></div>
                            <div class="x"></div>
                        </div>
                        <div class="carouselNext">
                            <div class="y"></div>
                            <div class="x"></div>
                        </div>
                    </div>
                </div>
                <div class="flip-back">
                    <div class="cy"></div>
                    <div class="cx"></div>
                </div>
            </div>	  
        </div>	
    </div>
    
    
    <div class="product">
    <div class="info-large">
        	<h4>PLEATED DETAIL DRESS</h4>
            <div class="sku">
            	PRODUCT SKU: <strong>89356</strong>
            </div>
             
            <div class="price-big">
            	<span>$43</span> $39
            </div>
             
            <h3>COLORS</h3>
            <div class="colors-large">
                <ul>
                    <li><a href="" style="background:#222"><span></span></a></li>
                    <li><a href="" style="background:#6e8cd5"><span></span></a></li>
                    <li><a href="" style="background:#9b887b"><span></span></a></li>
                    <li><a href="" style="background:#44c28d"><span></span></a></li>
                </ul> 
            </div>

            <h3>SIZE</h3>
            <div class="sizes-large">
 				<span>XS</span>
                <span>S</span>
                <span>M</span>
                <span>L</span>
                <span>XL</span>
                <span>XXL</span>
            </div>
            
            <button class="add-cart-large">Add To Cart</button>                          
                         
        </div>
        <div class="make3D">
            <div class="product-front">
                <div class="shadow"></div>
                <?php echo '<img src="' .$getFile . '" width="300px" />'?>
                <div class="image_overlay"></div>
                <form method="POST">
<button  class="add_to_cart" type="submit" name="send">ارسال - Send</button>
</form>
                <div class="view_gallery">View gallery</div>
                <div class="stats">        	
                    <div class="stats-container">
                    <?php echo '<p class="card-text">' . $result["prix"] .' </p>' ?>
                  <?php echo '<h5 class="card-title"> ' .$result["titre"] . '</h5>' ?>   
                        <p>Summer dress</p>                                            
                        
                        <div class="product-options">
                        <strong>SIZES</strong>
                        <span>XS, S, M, L, XL, XXL</span>
                        <strong>COLORS</strong>
                        <div class="colors">
                            <div class="c-blue"><span></span></div>
                            <div class="c-red"><span></span></div>
                            <div class="c-white"><span></span></div>
                            <div class="c-green"><span></span></div>
                        </div>
                    </div>                       
                    </div>                         
                </div>
            </div>
            
            <div class="product-back">
                <div class="shadow"></div>
                <div class="carousel">
                    <ul class="carousel-container">
                        <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/6.jpg" alt="" /></li>
                        <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/7.jpg" alt="" /></li>
                    </ul>
                    <div class="arrows-perspective">
                        <div class="carouselPrev">
                            <div class="y"></div>
                            <div class="x"></div>
                        </div>
                        <div class="carouselNext">
                            <div class="y"></div>
                            <div class="x"></div>
                        </div>
                    </div>
                </div>
                <div class="flip-back">
                    <div class="cy"></div>
                    <div class="cx"></div>
                </div>
            </div>	  
        </div>	
    </div>
    
    <div class="product">
    <div class="info-large">
        	<h4>PRINTED DRESS</h4>
            <div class="sku">
            	PRODUCT SKU: <strong>89356</strong>
            </div>
             
            <div class="price-big">
            	<span>$43</span> $39
            </div>
             
            <h3>COLORS</h3>
            <div class="colors-large">
                <ul>
                    <li><a href="" style="background:#222"><span></span></a></li>
                    <li><a href="" style="background:#6e8cd5"><span></span></a></li>
                    <li><a href="" style="background:#9b887b"><span></span></a></li>
                    <li><a href="" style="background:#44c28d"><span></span></a></li>
                </ul> 
            </div>

            <h3>SIZE</h3>
            <div class="sizes-large">
 				<span>XS</span>
                <span>S</span>
                <span>M</span>
                <span>L</span>
                <span>XL</span>
                <span>XXL</span>
            </div>
            
            <button class="add-cart-large">Add To Cart</button>                          
                         
        </div>
        <div class="make3D">
            <div class="product-front">
                <div class="shadow"></div>
                <?php echo '<img src="' .$getFile . '" width="300px" />'?>
                <div class="image_overlay"></div>
                <form method="POST">
<button  class="add_to_cart" type="submit" name="send">ارسال - Send</button>
</form>
                <div class="view_gallery">View gallery</div>
                <div class="stats">        	
                    <div class="stats-container">
                    <?php echo '<p class="card-text">' . $result["prix"] .' </p>' ?>
                  <?php echo '<h5 class="card-title"> ' .$result["titre"] . '</h5>' ?>   
                        <p>Summer dress</p>                                            
                        
                        <div class="product-options">
                        <strong>SIZES</strong>
                        <span>XS, S, M, L, XL, XXL</span>
                        <strong>COLORS</strong>
                        <div class="colors">
                            <div class="c-blue"><span></span></div>
                            <div class="c-red"><span></span></div>
                            <div class="c-white"><span></span></div>
                            <div class="c-green"><span></span></div>
                        </div>
                    </div>                       
                    </div>                         
                </div>
            </div>
            
            <div class="product-back">
                <div class="shadow"></div>
                <div class="carousel">
                    <ul class="carousel-container">
                        <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/7.jpg" alt="" /></li>
                        <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/5.jpg" alt="" /></li>
                        <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/4.jpg" alt="" /></li>
                    </ul>
                    <div class="arrows-perspective">
                        <div class="carouselPrev">
                            <div class="y"></div>
                            <div class="x"></div>
                        </div>
                        <div class="carouselNext">
                            <div class="y"></div>
                            <div class="x"></div>
                        </div>
                    </div>
                </div>
                <div class="flip-back">
                    <div class="cy"></div>
                    <div class="cx"></div>
                </div>
            </div>	  
        </div>	
    </div>
    
    <div class="product">
    <div class="info-large">
        	<h4>PRINTED DRESS</h4>
            <div class="sku">
            	PRODUCT SKU: <strong>89356</strong>
            </div>
             
            <div class="price-big">
            	<span>$43</span> $39
            </div>
             
            <h3>COLORS</h3>
            <div class="colors-large">
                <ul>
                    <li><a href="" style="background:#222"><span></span></a></li>
                    <li><a href="" style="background:#6e8cd5"><span></span></a></li>
                    <li><a href="" style="background:#9b887b"><span></span></a></li>
                    <li><a href="" style="background:#44c28d"><span></span></a></li>
                </ul> 
            </div>

            <h3>SIZE</h3>
            <div class="sizes-large">
 				<span>XS</span>
                <span>S</span>
                <span>M</span>
                <span>L</span>
                <span>XL</span>
                <span>XXL</span>
            </div>
            
            <button class="add-cart-large">Add To Cart</button>                          
                         
        </div>
        <div class="make3D">
            <div class="product-front">
                <div class="shadow"></div>
                <?php echo '<img src="' .$getFile . '" width="300px" />'?>
                <div class="image_overlay"></div>
                <form method="POST">
<button  class="add_to_cart" type="submit" name="send">ارسال - Send</button>
</form>
                <div class="view_gallery">View gallery</div>
                <div class="stats">        	
                    <div class="stats-container">
                    <?php echo '<p class="card-text">' . $result["prix"] .' </p>' ?>
                  <?php echo '<h5 class="card-title"> ' .$result["titre"] . '</h5>' ?>   
                        <p>Summer dress</p>                                            
                        
                        <div class="product-options">
                        <strong>SIZES</strong>
                        <span>XS, S, M, L, XL, XXL</span>
                        <strong>COLORS</strong>
                        <div class="colors">
                            <div class="c-blue"><span></span></div>
                            <div class="c-red"><span></span></div>
                            <div class="c-white"><span></span></div>
                            <div class="c-green"><span></span></div>
                        </div>
                    </div>                       
                    </div>                         
                </div>
            </div>
            
            <div class="product-back">
                <div class="shadow"></div>
                <div class="carousel">
                    <ul class="carousel-container">
                        <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/8.jpg" alt="" /></li>
                        <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/7.jpg" alt="" /></li>
                    </ul>
                    <div class="arrows-perspective">
                        <div class="carouselPrev">
                            <div class="y"></div>
                            <div class="x"></div>
                        </div>
                        <div class="carouselNext">
                            <div class="y"></div>
                            <div class="x"></div>
                        </div>
                    </div>
                </div>
                <div class="flip-back">
                    <div class="cy"></div>
                    <div class="cx"></div>
                </div>
            </div>	  
        </div>	
    </div>    
</div>
</div>
    
    <footer class="credit">Author: shipra - Distributed By: <a title="Awesome web design code & scripts" href="https://www.codehim.com?source=demo-page" target="_blank">CodeHim</a></footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- partial -->
  <script  src="../project/js/script.js"></script>

</body>
</html>



</main>
</body>
</html>

<?php

?> 
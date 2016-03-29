<?php
    require_once 'controllers/CartsController.php';
	require_once 'services/CartsService.php';
 ?>
 
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CLAUDON QUENTIN | Famous | Fashion Store</title>

    <!-- Bootstrap -->
    <link href="style/bootstrap.min.css" rel="stylesheet">
	<link href="style/style.css" rel="stylesheet">
	<link href="style/bootstrap-treeview.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/6.1.3/css/bootstrap-slider.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	  
	  
	  <nav class="navbar navbar-default">
	    <div class="container-fluid">
 <!-- Collect the nav links, forms, and other content for toggling -->
	      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	        <ul class="nav navbar-nav">
	          <li class="dropdown">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">English <span class="caret"></span></a>
	            <ul class="dropdown-menu">
	              <li><a href="#">English</a></li>
	              <li><a href="#">Français</a></li>
	            </ul>
	          </li>
	          <li class="dropdown">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">USD <span class="caret"></span></a>
	            <ul class="dropdown-menu">
	              <li><a href="#">USD</a></li>
	              <li><a href="#">EURO</a></li>
	            </ul>
	          </li>
	          <li class="dropdown">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Compare <span class="caret"></span></a>
	            <ul class="dropdown-menu">
	              <li><a href="#">English</a></li>
	              <li><a href="#">Français</a></li>
	            </ul>
	          </li>
	        </ul>
	        <ul class="nav navbar-nav navbar-right">
	          <li><a href="#">My Account</a></li>
			  <li><a href="#">Wishlist</a></li>
			  <li><a href="?page=cart">My Cart</a></li>
			  <li><a href="#">Blog</a></li>
			  <li><a href="#">Log In</a></li>
	          
	        </ul>
	      </div><!-- /.navbar-collapse -->
	    </div><!-- /.container-fluid -->
	  </nav>
	  
	 <div class="row">
		 <div class="col-md-6">
	    	<a href="?page=list"> <img src="ressources/page-list-cuts_10.png" alt="Logo"></img><a href="#">
		</div>
		
		<div class="col-md-4">
		  <div class="input-group">
		    <div class="input-group-btn">
			  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ALL <span class="caret"></span></button>
			          <ul class="dropdown-menu">
			            <li><a href="#">ALL</a></li>
					</ul>
		    </div>
		    <input type="text" class="form-control" aria-label="...">
			<div class="input-group-btn">
				<button type="button" class="btn btn-default" aria-label="Help"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
		  	</div>	
		  </div>
		</div>
		<div class="col-md-2">
			<div class="btn-group">
			  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
			    Cart <span class="caret"><span class="badge black-badge" id="cart-qty"><?php echo CartsService::total() ?></span></span>
			  </button>
			  <ul class="dropdown-menu">
			    <li><a href="?page=cart">Go to my cart</a></li>
			  </ul>
			</div>
		</div>
	</div>
	
	<div id="middle-menu" class="row middle-menu">
		<div class="col-md-1">HOME</div>
		<div class="col-md-1 active">WOMEN</div>
		<div class="col-md-1">MEN</div>
		<div class="col-md-1">SALE</div>
		<div class="col-md-1">ACCESSORIES</div>
		<div class="col-md-1">VIP</div>
	</div>
	
	<div class="slide">
		<img src="ressources/slide.png" alt="Logo"></img>
	</div>
	
	
		<ol class="breadcrumb">
		  <li><a href="#">HOME</a></li>
		  <li><a href="#">WOMEN</a></li>
		</ol>
	
	
	
	
	
	
	<div class="row no-margin-bot">
		<div class="col-md-3  ">
			<h4 id="Categorie-name" class="">WOMEN</h4>
		</div>
		<div class="col-md-9 ">
			<div class="col-md-2 ">
				<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-th" aria-hidden="true"></span></button>
				<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span></button>
			</div>
			<div class="col-md-3 col-md-offset-7 ">
				<div class="btn-group">
				  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    12 <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu">
				    <li>12</li>
				  </ul>
				</div>
				<div class="btn-group">
				  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">				 
				    Position <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu">
				    <li>Position</li>
				  </ul>
				</div>
				<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span></button>
			</div>
		</div>
	</div>
	
	
	<!-- Catalogue-->
	<div class="row">
		<!-- LEFT MENU PARTIE 1 -->
		<div class="col-md-3  padding-r-10">
		<div id="tree" class="boder-top"></div>
		</div>
		<!-- FIN LEFT MENU PARTIE 1 -->
		
		<div class="col-md-9 boder-top new">
		<div class="col-md-4 center">
			<a href="?page=product-page"><img src="ressources/1.png" alt="Logo" class="img-thumbnail"></img></a>
			<p class="nom-produit"> Superbe Robe</p>
			<p class="note-produit">
				<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
			</p>
			<p class="prix-produit">
				$1000
			</p>
			<div class="col-md-4 col-md-offset-4 couleur-produit"><div class="square-blue"></div><div class="square-green"></div><div class="square-red"></div><div class="square-yellow"></div></div>
			<button type="button" class="btn btn-default margin-t-10 add-cart-button"  data-productid="1"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> ADD TO CART</button>
		</div>
		<div class="col-md-4 center">
			<a href="?page=product-page"><img src="ressources/2.png" alt="Logo" class="img-thumbnail"></img></a>
			<p class="nom-produit"> WAHOOUUU</p>
			<p class="note-produit">
				<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
			</p>
			<p class="prix-produit">
				$430
			</p>
			<div class=" col-md-4 col-md-offset-4 couleur-produit"><div class="square-blue"></div><div class="square-green"></div><div class="square-red"></div><div class="square-yellow"></div></div>
			<button type="button" class="btn btn-default margin-t-10 add-cart-button"  data-productid="2"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> ADD TO CART</button>
		</div>
		<div class="col-md-4 center">
			<a href="?page=product-page"><img src="ressources/3.png" alt="Logo" class="img-thumbnail"></img></a>
			<p class="nom-produit">  Robe</p>
			<p class="note-produit">
				<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
			</p>
			<p class="prix-produit">
				$678
			</p>
			<div class=" col-md-4 col-md-offset-4 couleur-produit"><div class="square-blue"></div><div class="square-green"></div><div class="square-red"></div><div class="square-yellow"></div></div>
			<button type="button" class="btn btn-default margin-t-10 add-cart-button"  data-productid="3"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> ADD TO CART</button>
		</div>
	</div></div>
	
	
	<div class="row">
		<!-- LEFT MENU PARTIE 2 -->
		<div class="col-md-3 padding-r-10">
		<h4 class=" border-bottom padding-r-10"> SHOP BY </h4>
		
			 
	<p class=" border-bottom"><a data-toggle="collapse" href="#collapse1">PRICE &nbsp;&nbsp;<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a></p>
			     
			    <div id="collapse1" class="panel-collapse collapse">
			      <div >
					<div class="row">
                        <div class="col-md-12">
                            <input id="price-range" type="text" class="price-range"
                            data-slider-min="10" data-slider-max="1000"
                            data-slider-step="5" data-slider-value="[10,251]" data-slider-id="price-slider"/>
                        </div>
                    </div>
                    <div class="row">
					  <div class="col-md-2 ">                     
                           <span class="glyphicon glyphicon-usd" aria-hidden="true"></span>
	  			      </div>
					  <div class="col-md-4">
                            <input id="minprice" type="text" class="form-control" name="name" value="10">
					  </div>  
					  
					  <div class="col-md-4">                  
                            <input id="maxprice" type="text" class="form-control" name="name" value="251" >   
					  </div> 
					  <div class="col-md-2">                     
                            <button type="button" name="button" class="btn btn-default black-button hundred-width">Go</button>
	  			      </div> 
                    </div>
			      </div>
			    </div>
			 
			
		 	<p class=" border-bottom"><a data-toggle="collapse" href="#collapse2">COLOR &nbsp;&nbsp;<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a></p>
			     
		 			    <div id="collapse2" class="panel-collapse collapse">
		 			      <div >
		 			      	<div class="square-black-g"></div>
							<div class="square-purple-g"></div>
							<div class="square-brown-g"></div>
							<div class="square-grey-g"></div>
							<div class="square-blue-g"></div>
							<div class="square-red-g"></div>
							<div class="square-green-g"></div>
							<div class="square-yellow-g"></div>
							<div class="square-white-g"></div>
							<div class="square-pink-g"></div>
							<div class="square-cyan-g"></div>
							<div class="square-orange-g"></div>
							<div class="square-lime-g"></div>
							<div class="square-bleen-g"></div>
							<div class="square-indigo-g"></div>
							<div class="square-beige-g"></div>
		 			      </div>
		 			    </div>
			
		</div>
		<!-- FIN LEFT MENU PARTIE 2 -->
		<div class="skirts">
		<div class="col-md-3 center">
			<a href="?page=product-page"><img src="ressources/4.png" alt="Logo" class="img-thumbnail"></img></a>
			<p class="nom-produit"> Magnifique Robe</p>
			<p class="note-produit">
				<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
			</p>
			<p class="prix-produit">
				$543
			</p>
			<div class="col-md-4 col-md-offset-4 couleur-produit"><div class="square-blue"></div><div class="square-green"></div><div class="square-red"></div><div class="square-yellow"></div></div>
			<button type="button" class="btn btn-default margin-t-10 add-cart-button"  data-productid="4"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> ADD TO CART</button>
		</div>
		<div class="col-md-3 center">
			<a href="?page=product-page"><img src="ressources/5.png" alt="Logo" class="img-thumbnail"></img></a>
			<p class="nom-produit"> Jolie Robe</p>
			<p class="note-produit">
				<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
			</p>
			<p class="prix-produit">
				$999
			</p>
			<div class="col-md-4 col-md-offset-4 couleur-produit"><div class="square-blue"></div><div class="square-green"></div><div class="square-red"></div><div class="square-yellow"></div></div>
			<button type="button" class="btn btn-default margin-t-10 add-cart-button"  data-productid="5"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> ADD TO CART</button>
		</div>
		<div class="col-md-3 center">
			<a href="?page=product-page"><img src="ressources/6.png" alt="Logo" class="img-thumbnail"></img></a>
			<p class="nom-produit"> Robe violette</p>
			<p class="note-produit">
				<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
			</p>
			<p class="prix-produit">
				$666
			</p>
			<div class=" col-md-4 col-md-offset-4 couleur-produit"><div class="square-blue"></div><div class="square-green"></div><div class="square-red"></div><div class="square-yellow"></div></div>
			<button type="button" class="btn btn-default margin-t-10 add-cart-button"  data-productid="6"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> ADD TO CART</button>
		</div>
	</div>
	</div>
	
	
	
	<!-- FOOTER-->
	<div class="row footer">
	                <div class="col-md-3">
	                    <h4>About us</h4>
	                    <ul>
	                        <li>Contact Us</li>
	                        <li>About Us</li>
	                        <li>Careers</li>
	                        <li>Blog</li>
	                        <li>Press</li>
	                    </ul>
	                </div>
	                <div class="col-md-3">
	                    <h4>Help</h4>
	                    <ul>
	                        <li>Payments</li>
	                        <li>Saved Cards</li>
	                        <li>Shipping</li>
	                        <li>Cancellation &emp Returns</li>
	                        <li>FAQ</li>
	                    </ul>
	                </div>
	                <div class="col-md-3">
	                    <h4>Shipping</h4>
	                    <ul>
	                        <li>Delivery</li>
	                        <li>Track your order</li>
	                        <li>Discount</li>
	                        <li>Returns</li>
	                        <li>Buy gift cards</li>
	                    </ul>
	                </div>
	                <div class="col-md-3">
	                    <div class="row">
	                        <h4>Newsletter Signup</h4>
	                    </div>
	                    <div class="row">
	                        <input type="text" name="name" value="e mail">
	                    </div>
	                    <div class="row">
	                        <h4>Follow Us</h4>
	                    </div>
	                    <div class="row">
	                        <div class="col-md-1 first-social-icons">
	                            <img src="ressources/page-list-cuts_57.png"/>
	                        </div>
	                        <div class="col-md-1">
	                            <img src="ressources/page-list-cuts_59.png"/>
	                        </div>
	                        <div class="col-md-1">
	                            <img src="ressources/page-list-cuts_61.png"/>
	                        </div>
	                        <div class="col-md-1 ">
	                            <img src="ressources/page-list-cuts_63.png"/>
	                        </div>
	                        <div class="col-md-1 ">
	                            <img src="ressources/page-list-cuts_65.png"/>
	                        </div>
	                        <div class="col-md-1 ">
	                            <img src="ressources/page-list-cuts_67.png"/>
	                        </div>
	                        <div class="col-md-1 ">
	                            <img src="ressources/page-list-cuts_69.png"/>
	                        </div>
	                        <div class="col-md-1 ">
	                            <img src="ressources/page-list-cuts_71.png"/>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="row bottom-footer">
	                <div class="col-md-12">
	                    © 2015
	                    <img src="ressources/page-list-cuts_82.png" class="credit-cards"/>

	                </div>
	            </div>
	        </div>
	
	
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-treeview.js"></script>
	<script src="js/script.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/6.1.3/bootstrap-slider.min.js"></script>
  </body>
</html>
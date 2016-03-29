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
	

	
		<ol class="breadcrumb">
		  <li><a href="#">HOME</a></li>
		  <li><a href="#">WOMEN</a></li>
		</ol>
	
	

	
	
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
  </body>
</html>
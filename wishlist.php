<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.css'/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.0.0/animate.css'/>
    <title>Document</title>
    <style>
        #signup{
            border-color:#f57100;
            color:#f57100;
            border-radius:25px;
            padding:3px 10px;
        }
        #signup:hover{
            background:#f57100;
            color:white;
        }
        #ads{
            background:#FFCF75;
            color:#1f374c;
            border:1px solid #e6bb6a;
            border-bottom:30px solid #e6bb6a;
        }
        .topic_heading{
            font-family:"Lucida Console", Monaco, monospace;
            color:#f57100;
            font-weight:400;
        }

        #home_price{
            color:#f57100;
            text-decoration:underline;
            font-size:18px;}

        #selectB:hover{
            background-color:#f57100;}

        img{
            width:200px;
            height:300px;
        }
        }
    </style>
</head>
<body>
<section style="background-color:#f57100;">
    <div class="container">
        <div class="row px-3 text-light" style="padding:1px 0px;">
            <div class="col-4 text-center">
                <i class="fab fa-facebook-f mx-1"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-twitter mx-1"></i>
                <i class="fab fa-linkedin-in"></i>
                <i class="fab fa-viber mx-1"></i>
            </div>
            <div class="col-8 text-center" style="font-size:12px;">
                © FREE SHIPPING FOR ALL ORDERS ABOVE $100.
            </div>
        </div>
    </div>
</section>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" style="border-bottom: 0.5px solid rgba(0, 0, 0, 0.281);">
        <div class="container">
            <a class="navbar-brand" href="#">LOGO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav" style="font-weight:450;">
            <form class="form-inline ml-2 my-2 my-lg-0">
                <div class="input-group">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                    <button class="btn btn-secondary my-2 my-sm-0" id="search" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            </ul>
            <ul class="navbar-nav ml-auto" style="font-weight:450;">
                <li class="nav-item ">
                    <a href="#" class="nav-link mr-2"><i class="fas fa-shopping-cart" style="font-size:22px;"></i></a>
                </li>
                <li class="nav-item ">
                    <a href="#" class="nav-link">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Help</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><button id="signup" class="btn btn-outline-secondary btn-sm">Sign Up</button></a>
                </li>
            </ul>
            </div>
        </div>
        
    </nav>
    <section class="mt-4 bg-white container p-4">

 <h1 class="text-center" >My Wishlist</h1>
 <div class="sortSelect_Y7hcA">
 </div>
 <div class="row">
        <div class="col-md-4 col-4 py-3" style="border-right:0.5px bg-light;">
 <div class="select">
    <select id="selectB" class="text-secondary text-decaration-none ">
    <option value="recentlyadd">Recently added</option>
 <option value="discount">Discount %</option>
 <option value="priceHtoL">Price: high to low</option>
 <option value="priceLtH">Price: low to high</option>
 <option value="brandAtZ">Brand A-Z</option>
 <option value="brandZtA">Brand Z-A</option>
 <option value="stock">Stock</option>
 </select>
</div>
<div class="col-md-4 col-4 py-3" style="border-right:0.5px bg-light;"></div>
<div class="col-md-4 col-4 py-3" style="border-right:0.5px bg-light;"></div>
</div>
<div class="row">
        <div class="col-md-4 col-4 py-3" style="border-right:0.5px bg-light;">
        <div class="product_slipper">
                    <div class="productImageWrapper_3aOXQ">
                    <img src="https://images.asos-media.com/products/nike-benassi-jdi-sliders-in-navy-343880-403/4757244-1-blue?$XXL$&wid=513&fit=constrain ">
                        <p>Nike Slipper</p></div>
                        

</div>
<div class="col-md-4 col-4 py-3" style="border-right:0.5px bg-light;">
<div class="product_slipper">
                <div class="productSlipperN1" aria-hidden="false">
                    <div class="productImageWrapper_3aOXQ">
                    <img src="https://images.asos-media.com/products/nike-benassi-jdi-sliders-in-navy-343880-403/4757244-1-blue?$XXL$&wid=513&fit=constrain ">
                        <p>Nike Slipper</p></div>
                     
</div>
<div class="col-md-4 col-4 py-3" style="border-right:0.5px bg-light;">
<div class="product_slipper">
                <div class="productSlipperN1" aria-hidden="false">
                    <div class="productImageWrapper_3aOXQ">
                    <img src="https://images.asos-media.com/products/nike-benassi-jdi-sliders-in-navy-343880-403/4757244-1-blue?$XXL$&wid=513&fit=constrain ">
                        <p>Nike Slipper</p></div>
                     
</div>
</div>
</div>


</section>


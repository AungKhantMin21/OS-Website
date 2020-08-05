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
        #btn_color{
            border-color:grey;
            color:grey;
            border-radius:25px;
            padding:5px 10px;
        }
        #btn_color:hover{
            background:lightpink;
            color:white;
        }
        #btn_color1{
            border-radius:25px;
        }
        #btn_color1:hover{
            background:lightblue;
            color:white;
        }
        .dropdown-content {
        display: none;
        position: absolute;
        background-color: white;
        border-radius:25px;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        }
        .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        }
        .dropdown-content a:hover {
        background-color: lightblue;
        border-radius:25px;
        }
        .dropdown:hover .dropdown-content {display: block;}
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
            font-size:18px;
        }
    </style>
</head>
<body>
<section style="background-color:#32C8EF;">
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
                <li id="btn_color1" class="nav-item  border-bottom">
                    <a href="#" class="nav-link mr-2">Contact Us</a>
                </li>
                <li>
                    <div class="dropdown">
                        <button type="button" id= "btn_color1" class="btn btn-white text-left text-secondary  border-bottom mr-2 ml-2">Help</button>
                            <div class="dropdown-content">
                                <a href="helpcenter.php">Help Center</a>
                                <a href="catagories.php">All Catagories</a>
                                <a href="helpaccount.php">Account Mangement</a>
                                <a href="#">Delivery</a>
                                <a href="#">Payment</a>
                                <a href="#">Return Policy</a>
                            </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                    <button type="button" id= "btn_color1" class="btn btn-white text-left text-secondary  border-bottom">Register</button>
                        <div class="dropdown-content">
                            <a href="#">Log in</a>
                            <a href="#">Sign up</a>
                        </div>
                    </div>
                </li>
            </ul>
            </div>
        </div>
        
    </nav>

    


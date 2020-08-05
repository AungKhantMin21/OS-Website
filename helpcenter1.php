<?php require "header1.php" ?>


    <div class="container col-mt-4 py-4">    
       
        <div class="row">

            <div class="col-md-2" style="border-right:0.5px solid darkgrey;">
                <nav>
                    <a id="btn_color1" class="nav-link text-secondary border-bottom" href="home.php">Home</a>
                    <a id="btn_color1" class="nav-link text-secondary border-bottom" href="#">About Us</a>
                    <a id="btn_color1" class="nav-link text-secondary border-bottom" href="#">How To Buy</a>
                    <a id="btn_color1" class="nav-link text-secondary border-bottom active" href="#">Order Tracking</a>
                    <div class="dropdown">
                        <button type="button" id= "btn_color1" class="nav-link btn btn-white text-left text-secondary text-secondary border-bottom pr-5">
                            Help</button>
                        <div class="dropdown-content">
                            <a href="#">Account Management</a>
                            <a href="#">Delivery</a>
                           <a href="#">Payment</a>
                           <a href="#">Return Policy</a>
                        </div>
                    </div>
                </nav>
            </div>

            <form class="col-md-10 py-5">
                <div class="input-group">
                    <input class="form-control" type="search" placeholder="Search Question" aria-label="Search">
                    <div class="input-group-append">
                    <button class="btn btn-secondary my-2 my-sm-0" id="search" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>

        </div>

        <br>
        
        <div class="row">
            
            <div class="col-md-2" style="border-right:0.5px solid darkgrey;"></div>

            <div class="col-md-10">
                <h6 class=" text-center text-dark py-2 border-top border-bottom">Most Searched Questions</h6>
                
                <br>
                
                <ul> 
                
                <div class="row">
                    <div class="col-md-2"></div>
                    <li class="col-md-5"><a href="#" class="text-secondary text-decoration-none">Can i cancel my order?</a></li>    
                    <li class="col-md-5"><a href="#" class="text-secondary text-decoration-none">Return Policy</a></li>
                </div>
               
                <br>
               
                <div class="row">
                    <div class="col-md-2"></div>
                    <li class="col-md-5"><a href="#" class="text-secondary text-decoration-none">How do I pay for Products?</a></li>
                    <li class="col-md-5"><a href="#"class="text-secondary text-decoration-none">Is Cash On Delivery Service Provided?</a></li>
                </div>
                
                <br>

                <div class="row">
                    <div class="col-md-2"></div>
                    <li class="col-md-5"><a href="#" class="text-secondary text-decoration-none">Do we have to pay tax for the product?</a></li>
                    <li class="col-md-5"><a href="#" class="text-secondary text-decoration-none">Is receipt come along with product?</a></li>
                </div>
                
                <br>

                <div class="row">
                    <div class="col-md-2"></div>
                    <li class="col-md-5"><a href="#" class="text-secondary text-decoration-none">Will there be delayed due to Covid-19?</a></li>
                    <li class="col-md-5"><a href="#" class="text-secondary text-decoration-none">What currency does shop accept?</a></li>
                </div>
                
                <br>
                
                </ul>
                
                <br>
            
            </div>
        
        </div>
        
        <br>

        <div class="row">

            <div class="col-md-2" style="border-right:0.5px solid darkgrey;"></div>

            <div class="col-md-10">
                <h6 class=" text-center text-dark py-2 border-top border-bottom">Catagories</h6>
            </div>
        
        </div>
        
        <br>
    </div>

    
<?php require "footer1.php" ?>
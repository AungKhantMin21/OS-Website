<?php require "header1.php" ?>


    <div class="container col-mt-4 py-4" style="border-right:0.5px solid darkgrey;">
       
        <div class="row">

            <div class="col-md-2">
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
            
            <div class="col-md-10">
                <h3 class="display-4 text-center text-dark py-2 border-top border-bottom">All Catagories</h3>
            </div>

        </div>

        <div class="row">
            
            <div class="col-md-2"></div>
            
            <form class="col-md-10">
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

            <div class="col-md-2"></div>

            <div class="col-md-5">
                <div class="card" style="width:400px; height:200px; border-radius:25px; background:lightblue;">
                    <div class="card-body">
                        <p>My Account</p>
                        <a href="#" class="text-decoration-none text-left" style="color:grey;">Account Managment</a>
                    </div>
                </div>
            </div>

            <div class="col-md-5">    
                <div class="card" style="width:400px; height:200px; border-radius:25px; background:lightblue">
                    <div class="card-body">
                        <p>Delivery</p>
                        <a href="#" class="text-decoration-none text-dark text-left" style="color:grey;">Delivery</a>
                    </div>
                </div>
            </div>

        </div>

        <br>
        

        <div class="row">

        <div class="col-md-2"></div>

            <div class="col-md-5">
                <div class="card" style="width:400px; height:200px; border-radius:25px; background:lightblue">
                    <div class="card-body">
                        <p>Payment</p>
                        <a href="#" class="text-decoration-none text-left" style="color:grey;">Payment</a>
                    </div>
                </div>
            </div>

            <div class="col-md-5">    
                <div class="card" style="width:400px; height:200px; border-radius:25px; background:lightblue">
                    <div class="card-body">
                        <p>Return Policy</p>
                        <a href="#" class="text-decoration-none text-dark text-left" style="color:grey;">Return Policy</a>
                    </div>
                </div>
            </div>

        </div>

        <br>

        <div class="row">
            
        <div class="col-md-2"></div>

            <div class="col-md-5">
                <div class="card" style="width:400px; height:200px; border-radius:25px; background:lightblue">
                    <div class="card-body">
                        <p>My Account</p>
                        <a href="#" class="text-decoration-none text-left" style="color:grey;">Account Managment</a>
                    </div>
                </div>
            </div>

            <div class="col-md-5">    
                <div class="card" style="width:400px; height:200px; border-radius:25px; background:lightblue">
                    <div class="card-body">
                        <p>My Account</p>
                        <a href="#" class="text-decoration-none text-dark text-left" style="color:grey;">Account Managment</a>
                    </div>
                </div>
            </div>

        </div>

    </div>

    
<?php require "footer1.php" ?>
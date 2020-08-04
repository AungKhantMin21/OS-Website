<?php require "header.php" ?>

    <div class="container mt-4">
        <div class="row pb-3">
            <a href="home.php" class="text-info text-decoration-none">home</a>>
            <a href="productdetail.php" class="text-info text-decoration-none">Adjustable Head Vented Helmet Strap Mount for Mobius Sports Camera Helmet</a>
        </div>
        <div class="row bg-light p-3 border">
            <div class="col-md-3 text-center">
                <img src="https://static-01.shop.com.mm/p/96610bd6d12a167f8f3360f544a1515f.jpg_400x400q75-product.jpg_.webp" class="border mb-3" style="max-height:189px;" alt="...">
                <br>
                
            </div>
            <div class="col-md-7 px-5 border-left">
                <h6>Adjustable Head Vented Helmet Strap Mount for Mobius Sports Camera Helmet</h6>
                <p class="small">
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star-half-alt text-warning"></i> (112) Ratings
                    <i class="far fa-heart float-right" id="favourite"></i>
                    <h5>Ks 99999</h5>
                    <hr>
                </p>
                <p>
                    <h6>Brand : <span style="color:#f57100;">brandname</span></h6>
                    <h6>Product Details</h6>
                    <ul>
                        <li>Can be pasted on the helmet cap tie on the arm or wrist.</li>
                        <li>Multifunctional and durable.</li>
                        <li>Suitable for Bicycle Helmet handle bar mount.</li>
                        <li>Easily mounts to smooth surfaced helmets.</li>
                        <li>Material:plastic</li>
                        <li>Size: 90*100*100mm</li>
                        <li>Color:black</li>
                        <li>Package included:</li>
                    </ul>
                    <h6>Notes</h6>
                    <ul>
                        <li>Due to the difference between different monitors, the picture may not reflect the actual color of the item. We guarantee the style is the same as shown in the pictures.</li>
                        <li>Due to the manual measurement and different measurement methods, please allow 1-3cm deviation. Thanks!</li>
                    </ul>
                    <hr>
                    <h6 id="home_price"style="font-size:24px">Ks 99999</h6>
                </p>
            </div>
            <div class="col-md-2 border-left">
                <div class="form-group">
                    <label><h6>Quantity: </h6></label>
                    <div class="input-group my-1">
                        <div class="input-group-btn">
                            <button id="down" class="btn" onclick=" down('0')">-</button>
                        </div>
                        <input type="text" id="quantity" class="form-control text-center input-number" value="1" >
                        <div class="input-group-btn">
                            <button id="up" class="btn btn-default" onclick="up('20')">+</button>
                        </div>
                    </div>
                </div>
                <button id="buy_now" class="btn btn-warning btn-block">Buy Now</button>
                <button class="btn btn-outline-secondary btn-block">Add To Cart</button>
                <center><a href="#" class="text-secondary text-decoration-none text-info" style="font-size:13px;">apply promotion code</a></center><br>
                <h6>Payment Option</h6>
                <p class="text-center">Cash on delivery</p>
                <h6>Share</h6>
                <p class="text-center">
                    <a href="#"><i class="fab fa-facebook-f mr-1" style="color:#4267b2; font-size:18px;"></i></a>
                    <a href="#"><i class="fab fa-twitter mr-1" style="color:#2caae1; font-size:18px;"></i></a>
                    <a href="#"><i class="fab fa-instagram mr-1" 
                    style="background: -webkit-linear-gradient(#ff771f, #d82e7a, #8741d2);
                    -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-size:18px;"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p" style="color:#cc272a; font-size:18px;"></i></a>
                    
                </p>

            </div>
        </div><br>
        <div class="row">
        <h6>People also bought</h6>
        </div>
        <div class="row">
            <?php
                for( $i = 1; $i <=6; $i++){ ?>
                    <div class="col-sm-2 mt-4">
                        <a href="#" class="text-decoration-none text-dark text-left">
                            <div class="card" style="max-width:189px;">
                                <img src="https://static-01.shop.com.mm/p/61f058b37cf2339614c93af79fdcc2f4.jpg_400x400q75-product.jpg_.webp"  style="max-height:189px;" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-title">Adjustable Head Vented Helmet .... </p>
                                    <p class="card-text" id="home_price">Ks 99999</p>
                                    <p class="card-text small"><i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star-half-alt text-warning"></i> (112)</p>
                                </div>
                            </div>
                        </a>
                    </div>
            <?php }
            ?>
        </div>
        <div class="row mt-5">
            <h6>Customer reviews & feedbacks</h6>
        </div>
        <div class="row p-3 border bg-light">
            <div class="form-group border-bottom pb-4 pt-3 w-100 pr-4">
                <textarea class="form-control mb-3" id="exampleFormControlTextarea1" placeholder="Write a review here" rows="5"></textarea>
                <button class="btn btn-info mr-2">Submit</button>
                <button type="reset" class="btn btn-outline-secondary">Cancel</button>
            </div>
            <?php 
                for( $i = 1; $i <=3; $i++){ ?>
                <div class="row w-100">
                        <div class="col-6">
                            <p class="text-secondary mt-4 w-100" style="font-size:15px;">
                                Myat Min Khant
                                <br> 10 days ago
                            </p>
                        </div>
                        <div class="col-6">
                            <div class="dropdown">
                                <button class="btn float-right text-secondary" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <div class="dropdown-menu p-0" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item w-80" type="button">Edit</button>
                                    <button class="dropdown-item w-80" type="button">Delete</button>
                                    <button class="dropdown-item w-80" type="button">Report</button>
                                </div>
                            </div>
                        </div>
                </div>
            
            <p style="font-size:15px;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur totam itaque voluptas aperiam earum iusto ducimus id molestias harum, et aut illo quasi nulla consequatur similique amet mollitia porro tempore!</p>
            <?php
                }
                ?>
        </div>
    </div>

<?php require "footer.php" ?>
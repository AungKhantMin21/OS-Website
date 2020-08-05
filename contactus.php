<?php require "header.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.css'/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.0.0/animate.css'/>
    <link rel="stylesheet" href="style1.css">
<div class="container1 bg-light">
        <h1>Contact Us</h1>
        <br>
        <p>We'd love to hear from you!
            <br>
            Send us a question or comment with the form below and we'll be in touch with you as soon as possible.</p>
<div class="row">
    <div class="col-md-6">
        <form action="actiom_page.php">
    <div class="a">
        <label for="firstname"><b>First Name</b></label>
        <input type="text" id="firstname" placeholder="Enter Your First Name">
        <br>
        <label for="lastname"><b>Last Name</b></label>
        <input type="text" id="lastname" placeholder="Enter Your Last Name">
        <br>
        <label for="email"><b>Email</b></label>
        <input type="text" id="email" placeholder="examples@gmail.com">
        <br>
        <label for="phno"><b>Phone Number</b></label>
        <input type="text" id="phno" placeholder="Enter Your Phone Number">
        <br>
        <label for="subject"><b>Subject</b></label>
       <textarea name="subject" id="subject" cols="30" rows="8" placeholder="Write Something...."></textarea>
       <input type="Submit" value="Send Your Messages">
    </div>
        </form>
    </div>
    <div class="col-md-6 text-center">
        <i class="fab fa-facebook-f mr-3 py-4" style="color:#4267b2; font-size:30px;"></i>
        <a class="icon">www.shoppingpage.facbook.com</a>
        <br>
        <i class="fa fa-phone mr-3 py-4" style="color:black; font-size:30px;"></i>
        <a class="icon">+959123456789(hotline)</a>
        <br>
        <i class="fa fa-envelope mr-3 py-4" style="color:red; font-size:30px;"></i>
        <a class="icon">chawyatizin2002@gmail.com</a>
        <br>
        <i class="fa fa-building mr-3 py-4" style="color:brown; font-size:30px;"></i>
        <a class="icon">No(123),Panchan Tower<br>
        &nbsp;&nbsp;&nbsp;Pyay Road,Myay Ni Gone<br>
        &nbsp;&nbsp;&nbsp;Yangon
        </a>
    </div>
</div>
</div>
<?php require "footer.php"; ?>
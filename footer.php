
    <section class="mt-4 bg-dark text-light">
        <div class="container p-4">
            <div class="row mt-3">
                <div class="col-md-3 text-center" style="border-right:0.5px solid darkgrey;">
                    <h5 style="font-weight:400;">Company.com</h5>
                    <a href="#" class="text-light" style="font-weight:300;">About Us</a><br>
                    <a href="#" class="text-light" style="font-weight:300;">Contacts</a><br>
                    <a href="#" class="text-light" style="font-weight:300;">Terms & Conditions</a><br>
                    <a href="#" class="text-light" style="font-weight:300;">Privacy Policy</a><br>
                </div>
                <div class="col-md-3 text-center"  style="border-right:0.5px solid darkgrey;">
                    <h5 style="font-weight:400;">Customer Service</h5>
                    <a href="#" class="text-light" style="font-weight:300;">Your Account</a><br>
                    <a href="#" class="text-light" style="font-weight:300;">Help</a><br>
                    <a href="#" class="text-light" style="font-weight:300;">How to Buy</a><br>
                    <a href="#" class="text-light" style="font-weight:300;">Order Tracking</a><br>
                    <a href="#" class="text-light" style="font-weight:300;">Refund Policy</a><br>
                </div>
                <div class="col-md-3 text-center">
                    <h5 style="font-weight:400;">Follow On</h5>
                    <a href="#" class="text-light" style="font-weight:300;">Facebook</a><br>
                    <a href="#" class="text-light" style="font-weight:300;">Instagram</a><br>
                    <a href="#" class="text-light" style="font-weight:300;">Twitter</a><br>
                    <a href="#" class="text-light" style="font-weight:300;">LinkedIn</a><br>
                </div>
                <div class="col-md-3 ml-auto text-center"  style="border-left:0.5px solid darkgrey;">
                    <h5 style="font-weight:400;">Contact Us</h5>
                    <p style="font-weight: 300;"><i class="fas fa-map-marker-alt"></i> No.(123), Pan Chan Tower, <br>
                        Pyay Road, Bahan, <br>
                        Yangon <br>
                        <b><i class="fas fa-phone-alt"></i> +95 123456789</b><br>
                        <b><i class="fas fa-envelope"></i> company@domain.com</b></p>
                </div>
            </div>
        </div>
        <div class="text-center py-1" style="background:#1c1f21;">
        © 2020.All right reserved.
        </div>
    </section>


    

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.7/holder.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
    <script>
        function up(max) {
            document.getElementById("quantity").value = parseInt(document.getElementById("quantity").value) + 1;
            if (document.getElementById("quantity").value >= parseInt(max)) {
                document.getElementById("quantity").value = max;
            }
        }
        function down(min) {
            document.getElementById("quantity").value = parseInt(document.getElementById("quantity").value) - 1;
            if (document.getElementById("quantity").value <= parseInt(min)) {
                document.getElementById("quantity").value = min;
            }
        }

        $('#quantity').inputSpinner();
    new WOW().init();
    </script>
</body>
</html>

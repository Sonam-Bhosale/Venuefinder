<?php include('includes/header.php');?>
        <!-- Begin Container -->
        <div class="container-fluid no-padding h-100">
            <div class="row flex-row h-100 bg-white">
                <!-- Begin Left Content -->
                <div class="col-xl-3 col-lg-5 col-md-5 col-sm-12 col-12 no-padding">
                    <div class="elisyam-bg background-03">
                        <div class="elisyam-overlay overlay-08"></div>
                        <div class="authentication-col-content-2 mx-auto text-center">
                            <div class="logo-centered">
                                    <img src="../layout/assets/img/logo.png" alt="logo">
                            </div>
                            <h1>Venue Finder Holder </h1>
                            <span class="description">
                               . 
                            </span>
                            <ul class="login-nav nav nav-tabs mt-5 justify-content-center" role="tablist" id="animate-tab">
                                <li><a class="active" data-toggle="tab" href="#singin" role="tab" id="singin-tab" data-easein="zoomInUp">Sign In</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Left Content -->
                <!-- Begin Right Content -->
                <div class="col-xl-9 col-lg-7 col-md-7 col-sm-12 col-12 my-auto no-padding">
                    <!-- Begin Form -->
                    <div class="authentication-form-2 mx-auto">
                        <div class="tab-content" id="animate-tab-content">
                            <!-- Begin Sign In -->
                            <div role="tabpanel" class="tab-pane show active" id="singin" aria-labelledby="singin-tab">
                                <h3>Sign In To Venue Finder</h3>
                                <form action="../controller/credentials.php" method="">
                                    <div class="group material-input">
        							    <input type="text" required >
        							    <span class="highlight"></span>
        							    <span class="bar"></span>
        							    <label>Mobile Number</label>
                                    </div>
                                    <div class="group material-input">
        							    <input type="password" required>
        							    <span class="highlight"></span>
        							    <span class="bar"></span>
        							    <label>Password</label>
                                    </div>
                                    <div class="sign-btn text-center">
                                        <input type="submit" class="btn btn-lg btn-gradient-01" name="btnLogin" value="Sign In" >
                                    </div>  
                                </form>
                            </div>
                            <!-- End Sign In -->
                        
                        </div>
                    </div>
                    <!-- End Form -->                        
                </div>
                <!-- End Right Content -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Container -->    
        <!-- Begin Vendor Js -->
        <script src="../layout/assets/vendors/js/base/jquery.min.js"></script>
        <script src="../layout/assets/vendors/js/base/core.min.js"></script>
        <!-- End Vendor Js -->
        <!-- Begin Page Vendor Js -->
        <script src="../layout/assets/vendors/js/app/app.min.js"></script>
        <!-- End Page Vendor Js -->
        
    </body>
</html>